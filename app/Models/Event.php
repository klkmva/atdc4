<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
use App\Models\Speaker;
use App\Models\Partner;
use App\Models\Book;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\Facades\Storage;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'time',
        'title',
        'subtitle',
        'info',
        'Location_id',
        'book_id',
        'image',
        'youtube_id',
        'dailymotion_id',
        'published',
        'canceled',
        'spectators_counter',
        'books_counter',
        'travel_cost',
        'meal_cost',
        'hotel_cost',
        'created_at',
        'updated_at',
    ];

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }

    public function Location()
    {
        return $this->belongsTo(Location::class);
    }

    public function speakers(): BelongsToMany
    {
        return $this->belongsToMany(Speaker::class)->withPivot([])->using(EventSpeaker::class);
    }

    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class)->withPivot([])->using(EventPartner::class);
    }

    protected function shortdate(): Attribute
    {
        return Attribute::make(
            get: fn() => ucFirst(Carbon::parse($this->date)->locale('fr_FR')->isoFormat('ddd Do MMM YYYY'))
        );
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    protected function subtitle(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    protected function longDate(): Attribute
    {
        return Attribute::make(
            get: fn () => ucFirst(Carbon::parse($this->date)->locale('fr_FR')->isoFormat('dddd Do MMMM YYYY')) .' - ' . $this->time
        );
    }

    protected function time(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->locale('fr_FR')->isoFormat('H:mm')
        );
    }

    protected static function boot()
    {
        parent::boot();

        // à la création d'un évènement
        static::creating(function (Event $event) {
            // on sauvegarde l'image
            saveImage($event);
            // on supprime la date qui n'est plus disponible
            Date::where('date', $event->date)->delete();
            return true;
        });

        // à la mise à jour d'un évènement
        static::updating(function (Event $event) {
            saveImage($event);
            $old_date = $event->getOriginal('date');
            $new_date = $event->date;
            $old_canceled = $event->getOriginal('canceled');
            $new_canceled = $event->canceled;
            if ($old_date != $new_date) {
                // if ($old >= today()) {
                    Date::create(['date' => $old_date]);
                // }
                Date::where('date', $new_date)->delete();
            }
            if ($old_canceled != $new_canceled) {
                if ($new_canceled) {
                    Date::create(['date' => $new_date]);
                } else {
                    if (Date::where('date', $new_date)->get()->count() == 0) {
                        Notification::make()
                            ->title('La date n\'est pas disponible !')
                            ->danger()
                            ->send();
                        return false;
                    }

                    }
            }
            return true;
        });

        // à la suppression d'un évènement
        static::deleting(function (Event $event) {
            // on rend la date disponible si l'évènement n'était pas annulé
            if (!$event->canceled)
                Date::create(['date' => $event->date]);
            // on supprime le fichier de l'image
            return deleteImage($event);
        });
    }
}
