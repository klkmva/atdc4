<?php

use App\Http\Controllers\ValidateOption;
use App\Http\Controllers\PageTemplates;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Illuminate\Support\Str;

Route::livewire('/', 'pages::home');
Route::livewire('/archives/{year?}', 'pages::archives')->where('year', '\d{4}')->name('archives');
Route::livewire('/archives/search', 'pages::archives');
Route::livewire('/page/{page}', 'pages::page')->name('page');
Route::get('/validate/{data}', [ValidateOption::class, 'validation'])->name('validate');
Route::get('/page_templates', [PageTemplates::class, 'templates'])->name('page_templates');

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
