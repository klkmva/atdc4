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
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

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
    $where = $select == 'futur' ? ' where date >= current_date() ' : ($select == 'passe' ? ' where date < current_date() ' : '');

    // Les évènements sont triés par date ascendantes (asc) ou descendantes (desc)
    $order = $request->query('order', $select == 'passe' ? 'desc' : 'asc');
    $orderby = $order == 'asc' ? ' order by date asc ' : ' order by date desc ';

    // Nombre d'évènements à renvoyer
    $n = $request->query('n', null);
    $limit = preg_match('/\d+/', $n) ? ' limit ' . $n . ';': ';';

    $query = 'select * from events inner join locations on locations.id = events.location_id' . $where . $orderby . $limit;
    return DB::select($query);
});

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
