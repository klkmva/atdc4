<?php

namespace App\Models;

use Carbon\Carbon;
use Filament\Notifications\Notification;
use Illuminate\Database\Eloquent\Model;
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
        'video',
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

        static::creating(function (Event $event) {
            if ($event->wasChanged('image')) $this->saveImage($event);
            Date::where('date', $event->date)->delete();
            return true;
        });

        static::updating(function (Event $event) {
            if ($event->wasChanged('image')) $this->saveImage($event);
            if ($event->wasChanged('date')) {
                $old = $event->getOriginal('date');
                $new = $event->date;
                if ($old >= today()) {
                    Date::create(['date' => $old]);
                }
                Date::where('date', $new)->delete();
            }
            if ($event->wasChanged('canceled') && $event->canceled && $event->date >= today() && !$event->wasChanged('date')) {
                Date::create(['date' => $event->date]);
            }
            return true;
        });

        static::deleting(function (Event $event) {
            if ($event->date >= today())
                Date::create(['date' => $event->date]);
            return true;
        });
    }

    public function saveImage(Event $event) {
        $image = $event->image;
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
                if (Storage::disk('public')->put('/images/events/' . $name, $decoded) === false) {
                    throw new \Exception('Erreur lors de l\'enregistrement de l\'image.');
                };
                $event->image = Storage::url('/images/events/' . $name);

                Notification::make()
                    ->title('[' . $name . '] Image uploadée avec succès.')
                    ->success()
                    ->send();
                return true;
            } catch (\Exception $e) {
                $event->image = null;
                Notification::make()
                    ->title($e->getMessage())
                    ->danger()
                    ->send();
                return true;
            }
        }
    }
}
