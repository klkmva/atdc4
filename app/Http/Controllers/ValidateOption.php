<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Events\EventResource;
use Carbon\Carbon;
use App\Models\Book;
use App\Models\Date;
use App\Models\Option;
use App\Models\Event;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;

class ValidateOption extends Controller
{
    public function validation(string $data)
    {
        $explode = \explode('-', $data);
        if (sizeof($explode) == 2) {
            $date_id = $explode[0];
            $option_id = $explode[1];
            $date = Date::find($date_id);
            $option = Option::find($option_id);
            $book = Book::find($option->book_id);
            if ($book) {
                $arr = [
                    'date' => Carbon::parse($date->date),
                    'title' => $book->title,
                    'subtitle' => $book->subtitle,
                    'time' => env('DEFAULT_TIME', '19:00'),
                    'info' => $book->summary,
                    'book_id' => $book->id,
                    'location_id' => env('DEFAULT_LOCATION', 1),
                    'image' => $book->image,
                    'published' => false,
                    'canceled' => false,
                    'created_at' => \now(),
                ];

                // Suppresion de l'option
                // entraîne les suppressions en cascade dans la table pivot
                $option->delete();

                // Création de l'évènement correspondant à l'option
                // entraîne la suppresion de la date (cf App\Models\Event)
                // puis les suppressions en cascade dans la table pivot
                $event = Event::create($arr);

                return redirect(EventResource::getUrl('edit', ['record' => $event->id]));
            } else {
                Notification::make()
                    ->title('Vous devez associer un ouvrage à l\'option')
                    ->duration(3000)
                    ->send();
            }
        } else {
            Notification::make()
                ->title('Url incorrecte !')
                ->duration(3000)
                ->send();
        }
    }
}
