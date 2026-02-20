<?php

use App\Http\Controllers\ValidateOption;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home');
Route::livewire('/archives/{year?}', 'pages::archives')->where('year', '\d{4}')->name('archives');
Route::livewire('/archives/search', 'pages::archives');
Route::get('/validate/{date_id}/{option_id}', [ValidateOption::class, 'validation'])->name('validate');
