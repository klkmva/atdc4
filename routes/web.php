<?php

use App\Http\Controllers\ValidateOption;
use App\Http\Controllers\PageTemplates;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Event;
use App\Models\Speaker;
use App\Models\Book;
use App\Models\Publisher;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
use App\Filament\Clusters\Books\Resources\Books\BookResource;

Route::livewire('/', 'pages::home');
Route::livewire('/archives/{year?}', 'pages::archives')->where('year', '\d{4}')->name('archives');
Route::livewire('/archives/search', 'pages::archives');
Route::livewire('/page/{page}', 'pages::page')->name('page');
Route::get('/validate/{data}', [ValidateOption::class, 'validation'])->name('validate');
Route::get('/page_templates', [PageTemplates::class, 'templates'])->name('page_templates');

Route::get('/query', function (Request $request) {
    // select peut prendre les valeurs :
    //  - futur : les évènements à venir (valeur par défaut)
    //  - passe : les évènements passés
    //  - all : tous les évènements
    $select = $request->query('select', 'futur');
    $where = ' where canceled=0 and published=1' . ($select == 'futur' ? ' and date >= current_date() ' : ($select == 'passe' ? ' and date < current_date() ' : ''));

    // Les évènements sont triés par date ascendantes (asc) ou descendantes (desc)
    $order = $request->query('order', $select == 'passe' ? 'desc' : 'asc');
    $orderby = $order == 'asc' ? ' order by date asc' : ' order by date desc';

    // Nombre d'évènements à renvoyer
    $n = $request->query('n', null);
    $limit = preg_match('/\d+/', $n) ? " limit {$n};": ';';

    $query = "select `events`.date, `events`.time, `events`.title, `events`.subtitle, `events`.info, `events`.image, `locations`.name, `locations`.address, `locations`.full_name, `locations`.google_maps_url from `events` inner join `locations` on `locations`.id = `events`.location_id{$where}{$orderby}{$limit}";
    return DB::select($query);
});

Route::get('/youtube', function (Request $request) {
    $API_key    = 'AIzaSyARzKKAadQaZ7s-4wmib8XE3BBlEaIAlpY';
    $channelID  = 'UCPr_vDaKlT1hbtCYQoibfTw';
    $maxResults = 50;
    $nextPage   = '';
    $info = [];

    try {
        $ids = [];
        $items = [];
        foreach (Event::all() as $event) {
            $items[$event->date] = $event;
        }

        do {
            // Appels API pour récupérer la liste des ids des vidéos de la chaîne
            $myQuery = "https://www.googleapis.com/youtube/v3/search?key=$API_key&channelId=$channelID&fields=nextPageToken,items(id(videoId))&part=id&order=date&maxResults=$maxResults&pageToken=$nextPage";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $myQuery);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            $data = json_decode($response);
            foreach ($data->items as $item) {
                if (isset($item->id->videoId)) {
                    array_push($ids, $item->id->videoId);
                }
            }
            if (isset($data->nextPageToken) and $data->nextPageToken != $nextPage) {
                $continu = true;
                $nextPage = $data->nextPageToken;
            } else {
                $continu = false;
            }
        } while ($continu);

        foreach ($ids as $id) {
            // Parcours des vidéos récupérés ci-dessus
            $myQuery = "https://www.googleapis.com/youtube/v3/videos?key=$API_key&channelId=$channelID&fields=items(id,recordingDetails(recordingDate),snippet(title))&part=id,recordingDetails,snippet&id={$id}";
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_HEADER, 0);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_URL, $myQuery);
            curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
            curl_setopt($ch, CURLOPT_VERBOSE, 0);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
            $response = curl_exec($ch);
            $data = json_decode($response);
            if (property_exists($data->items[0]->recordingDetails, 'recordingDate')) {
                $recording_date = substr($data->items[0]->recordingDetails->recordingDate, 0, 10);
                if (array_key_exists($recording_date, $items)) {
                    $item = $items[$recording_date];
                    $date = $item->date;
                    if ($item->video != $data->items[0]->id) {
                        try {
                            $item->video = $data->items[0]->id;
                            $item->save();
                            array_push($info, [1, "($date) {$item->title} => {$data->items[0]->id}"]);
                        } catch (Exception $e) {
                            array_push($info, [2, "($date) {$item->title} => {$data->items[0]->id}<br>{$e->getMessage()}"]);
                        }
                    } else {
                        array_push($info, [0, "($date) {$item->title} => {$data->items[0]->id}"]);
                    }
                } else {
                    array_push($info, [3, "$recording_date => {$data->items[0]->id}"]);
                }
            } else {
                array_push($info, [4, "Date d'enregistrement absente dans la vidéo : {$data->items[0]->snippet->title}"]);
            }
        }
    } catch (Exception $err) {
        array_push($info, [5, $err->getMessage()]);
    };
    return view('yt.youtube', ['info' => $info]);
})->middleware('auth');

Route::get('/reset-password/{token}', function (string $token) {
    return view('auth.reset-password', ['token', $token]);
})->middleware('guest')->name('password-reset');

Route::post('/reset-password', function (Request $request) {
    $request->validate(([
        'token' => 'required',
        'email' => 'required|email',
        'password' => 'required|min:8|confirmed',
    ]));

    $status = Password::reset(
        $request->only('email', 'password', 'password_confirmation', 'token'),
        function (User $user, string $password) {
            $user->forceFill([
                'password' => Hash::make($password)
            ])->setRememberToken(Str::random(60));

            $user->save();

            event(new PasswordReset($user));
        }
    );
    return $status === Password::PasswordReset
        ? redirect()->route('login')->with('status', __($status))
        : back()->withErrors(['email' => [__($status)]]);
})->middleware('guest')->name('password.update');

Route::get('/convert', function (Request $request) {
    Event::all()->map(function ($item) {
        echo convert2webp($item) . '<br>';
    });
    Speaker::all()->map(function ($item) {
        echo convert2webp($item) . '<br>';
    });
    Book::all()->map(function ($item) {
        echo convert2webp($item) . '<br>';
    });
});

Route::post('/createBook', function (Request $request) {
    $values = [
        'isbn' => $request->input('isbn', ''),
        'title' => $request->input('title', ''),
        'subtitle' => $request->input('subtitle', ''),
        'authors' => $request->input('authors', ''),
        'summary' => $request->input('summary', ''),
        'image' => $request->input('image', null),
        'publisher_id' => $request->input('editor', null),
        ];
    if ($values['publisher_id']) {
        $publisher = Publisher::where('name', 'like', $values['publisher_id'])->first();
        if ($publisher) {
            $values['publisher_id'] = $publisher->id;
        } else {
            $pub = Publisher::create(['name' => $values['publisher_id']]);
            $values['publisher_id'] = $pub->id;
        }
    }
    $book = Book::create($values);
    if ($book) {
        return redirect(BookResource::getUrl('edit', ['record' => $book->id]));
    }
    else {
        back()->withErrors(['error', 'L\'enregistrement de l\'ouvrage a échoué']);
    }
})->middleware('auth');

Route::get('/annonce/{type}/{i}', function (Request $request, string $type, int $id) {
    $event = Event::find($id);
    if ($type == 'cancel') {
        if ($event->canceled) {
            return view('mail.notify.cancel', $event);
        } else {
            return view('mail.notify.error', $event);
        }
    }
    elseif ($type == 'announce') {
        if (! $event->canceled) {
            return view('mail.notify.announce', ['event'=> $event, 'type' => $type]);
        } else {
            return view('mail.notify.error', $event);
        }
    }
});
