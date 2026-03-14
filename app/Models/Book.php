<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
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
            if ($book->wasChanged('image')) {
                $image = $book->image;
                if ($image && preg_match('/^data:.*/', $image)) {
                    try {
                        $a = explode(',', $image);
                        $b = explode(";", $a[0]);
                        $c = explode(":", $b[0]);
                        $d = explode("/", $c[1]);
                        $ext = $d[1];
                        $name = uniqid() . '.' . $ext;
                        $encoded = $a[count($a) - 1];
                        $decoded = base64_decode($encoded);
                        if (Storage::disk('public')->put('/images/books/' . $name, $decoded) === false) {
                            throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                        };
                        $book->image = Storage::url('/images/books/' . $name);

                        Notification::make()
                            ->title('[' . $name . '] Image uploadée avec succès.')
                            ->success()
                            ->send();
                    } catch (\Exception $e) {
                        $book->image = null;
                        Notification::make()
                            ->title($e->getMessage())
                            ->danger()
                            ->send();
                    }
                }
            }
            return true;
        });
    }
}
