<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Date;
use App\Models\Event;
use App\Models\Option;
use Filament\Notifications\Notification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\View\View;

class ValidateOption extends Controller
{
    // public $option_id =null;
    // public $date_id = null;

    public function validation($option_id, $date_id)
    {
        Log::debug(\sprintf('invoke: %s/%s', '', $date_id, $option_id));
        $option = Option::find($option_id);
        $date = Date::find($date_id);
        $book = Book::find($option->book_id);

        if ($book) {
            // Création de l'évènement correspondant à l'option
            $event = Event::create([
                'title' => $book->title,
                'subtitle' => $book->subtitle,
                'date' => $date->date,
                'time' => env('DEFAULT_TIME', '19:00'),
                'info' => $book->summary,
                'book_id' => $book->id,
                'location_id' => env('DEFAULT_LOCATION', 1),
                'image' => $book->image,
                'published' => false,
                'canceled' => false,
                'created_at' => \now(),
            ]);

            // Suppression des options sur la date
            $date->options()->delete();

            // Changement du status de la date
            $date->status = 3;
            $date->save();

            return view('events.edit')->with('event', $event->id);
        }
        else {
            Notification::make()
                ->title('Vous devez associer un ouvrage à l\'option')
                ->duration(3000)
                ->send();
        }
    }
}
