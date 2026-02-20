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

    protected function firstName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }

    protected function lastName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }

    protected function fullName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
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

        static::saving(function ($speaker) {
            $image = $speaker->image;
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
                    if (Storage::disk('public')->put('/images/speakers/' . $name, $decoded) === false) {
                        throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                    };
                    $speaker->image = '/storage/images/speakers/' . $name;

                    Notification::make()
                        ->title('[' . $name . '] Image uploadée avec succès.')
                        ->success()
                        ->send();
                } catch (\Exception $e) {
                    $speaker->image = null;
                    Notification::make()
                        ->title($e->getMessage())
                        ->danger()
                        ->send();
                    return true;
                }
            }
            return true;
        });
    }
}
