<?php

use App\Http\Controllers\ValidateOption;
use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home');
Route::livewire('/archives/{year?}', 'pages::archives')->where('year', '\d{4}')->name('archives');
Route::livewire('/archives/search', 'pages::archives');
Route::livewire('/page/{page}', 'pages::page')->name('page');
Route::get('/validate/{data}', [ValidateOption::class, 'validation'])->name('validate');
