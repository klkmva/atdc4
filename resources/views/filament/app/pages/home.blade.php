@php

use App\Models\Event;
use App\Models\News;

$event = Event::where('date', '<=', \now())->orderBy('date')->first();

$actus = News::where('date', '<=', \now())->orderBy('date', 'desc');

@endphp

    <x-filament-panels::page>
        <p>{{ $event->date }}</p>
        <p>{{ view('filament.app.components.event-component', ['event' => $event]) }}</p>
    </x-filament-panels::page>