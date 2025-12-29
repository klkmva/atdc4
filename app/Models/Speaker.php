<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Storage;
use Filament\Notifications\Notification;

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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($speaker) {
            $image = $speaker->image;
            $path = '/storage/images/speakers/';
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
                        $speaker->image = $path . $name;
                    } catch (\Exception $e) {
                        if (Storage::disk('public')->put('/speakers/' . $name, $decoded) === false) {
                            throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                        };
                        $speaker->image = Storage::url('/speakers/' . $name);
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
