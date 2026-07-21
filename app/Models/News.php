<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

class News extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'time',
        'title',
        'info',
        'image',
    ];

    protected function longDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucFirst(Carbon::parse($value)->locale('fr_FR')->isoFormat('dddd Do MMMM YYYY')) . ($this->time ? ' - ' . $this->time : '')
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function (News $news) {
            return saveImage($news);
        });

        static::updating(function (News $news) {
            return saveImage($news);
        });

        static::deleting(function (News $news) {
            // on supprime (éventuellement) le fichier de l'image
            return deleteImage($news);
        });
    }
}
