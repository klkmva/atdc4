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
            $image = $news->image;
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
                    if (Storage::disk('public')->put('/images/news/' . $name, $decoded) === false) {
                        throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                    };
                    $news->image = Storage::url('/images/news/' . $name);

                    Notification::make()
                        ->title('[' . $name . '] Image uploadée avec succès.')
                        ->success()
                        ->send();
                } catch (\Exception $e) {
                    $news->image = null;
                    Notification::make()
                        ->title($e->getMessage())
                        ->danger()
                        ->send();
                }
            }
            return true;
        });
    }
}
