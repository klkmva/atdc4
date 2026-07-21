<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Bulletin extends Model
{
    protected $fillable = [
        'number',
        'edito_text',
        'edito_title',
        'period',
        'conf_huma',
        'created_at',
        'updated_at',
    ];

    public function events(): BelongsToMany
    {
        return $this->belongsToMany(Event::class)->withPivot([])->using(BulletinEvent::class);
    }

    public function speakers(): BelongsToMany
    {
        return $this->belongsToMany(Speaker::class)->withPivot([])->using(BulletinSpeaker::class);
    }

    protected static function boot()
    {
        parent::boot();

        // à la création d'un évènement
        static::creating(function (Bulletin $event) {
            // on sauvegarde l'image
            $event->saveImage();
            // on supprime la date qui n'est plus disponible
            Date::where('date', $event->date)->delete();
            return true;
        });
    }
}
