<?php

namespace App\Http\Controllers;

use App\Filament\Resources\Events\EventResource;
use Carbon\Carbon;
use App\Models\Book;
use App\Models\Date;
use App\Models\DateOption;
use App\Models\Option;
use App\Models\Event;
use Filament\Notifications\Notification;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
class ValidateOption extends Controller
{
    public function validation($data)
    {
        $explode = \explode('-', $data);
        if (sizeof($explode) == 2) {
            $option_id = $explode[1];
            $date_id = $explode[0];
            $option = Option::find($option_id);
            $date = Date::find($date_id);
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
                // Création de l'évènement correspondant à l'option
                $event = Event::create($arr);

                // Suppression des options sur la date
                DateOption::where('date_id', $date->id)->delete();

                // return to_route(EventResource::getUrl('edit', ['record' => $event->id]));
                return Redirect::route(EventResource::getUrl('edit'), ['record' => $event->id], 302);
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
