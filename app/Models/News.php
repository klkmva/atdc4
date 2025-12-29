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
        'title',
        'info',
        'image',
    ];

    protected function longDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucFirst(Carbon::parse($value)->locale('fr_FR')->isoFormat('dddd Do MMMM YYYY'))
        );
    }

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($news) {
            $image = $news->image;
            $path = '/storage/images/news/';
            if (preg_match('/^data:.*/', $image)) {
                try {
                    $a = explode(',', $image);
                    $b = explode(";", $a[0]);
                    $c = explode(":", $b[0]);
                    $d = explode("/", $c[1]);
                    $ext = pathinfo($d[1], PATHINFO_EXTENSION);
                    $name = uniqid() . '.' . $ext;
                    $encoded = $a[count($a) - 1];
                    $decoded = base64_decode($encoded);
                    try {
                        $fp = fopen($path . $name, 'w');
                        fwrite($fp, $decoded);
                        fclose($fp);
                        $news->image = $path . $name;
                    } catch (\Exception $e) {
                        if (Storage::disk('public')->put('/news/' . $name, $decoded) === false) {
                            throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                        };
                        $news->image = Storage::url('/news/' . $name);
                    }

                    Notification::make()
                        ->title('[' . $name . '] Image uploadée avec succès.')
                        ->success()
                        ->send();
                } catch (\Exception $e) {
                    Notification::make()
                        ->title($e->getMessage())
                        ->danger()
                        ->send();
                    return false;
                }
            } else {
                Notification::make()
                    ->title($image)
                    ->success()
                    ->send();
                return false;
            }
            return true;
        });
    }
}
