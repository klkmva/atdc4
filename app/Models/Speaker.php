<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'info',
        'contact_id',
        'image',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    protected function info(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function (Speaker $speaker) {
            return saveImage($speaker);
        });

        static::updating(function (Speaker $speaker) {
            return saveImage($speaker);
        });

        static::deleting(function (Speaker $speaker) {
            // on supprime (éventuellement) le fichier de l'image
            return deleteImage($speaker);
        });
    }
}
