<?php

use App\Http\Controllers\ValidateOption;
use App\Http\Controllers\PageTemplates;
use App\Http\Controllers\Youtube;
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

Route::get('/youtube', Youtube::class)->middleware('auth');

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
