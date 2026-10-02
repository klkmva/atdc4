<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'authors',
        'publisher_id',
        'summary',
        'publication_date',
        'isbn',
        'publisher_id',
        'link',
        'image',
    ];

    protected $guarded = ['id'];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function (Book $book) {
            return saveImage($book);
        });

        static::updating(function (Book $book) {
            return saveImage($book);
        });

        static::deleting(function (Book $book) {
            // on supprime (éventuellement) le fichier de l'image
            return deleteImage($book);
        });
    }
}
