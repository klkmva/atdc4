@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'event',
])
@php
    $bookid = $event->book_id;
    $divid = 'evinfo'.$event->id;
@endphp
<x-card size="w-full h-full" margin="mb-[1lh]">
    <div class="w-full text-xs sm:text-base eventcontainer">
        <div class="w-full sm:w-3/10 sm:float-right ml-1 h-full speakerscontainer">
            @foreach ($event->speakers as $speaker)
            <x-speaker.card :speaker="$speaker" class=" w-full sm:w-3/10" />
            @endforeach
        </div>
        <div @class([ "sm:text-3xl text-2xl text-stone-900 dark:text-stone-100 font-semibold"=> true,
            "mb-[1lh]" => $event->subtitle == '',
            ])>
            {{ $event->title }}
        </div>
        @if ($event->subtitle != '')
        <div class="font-semibold mb-[1lh] sm:text-2xl text-xl dark:text-stone-100 text-stone-800">{{ $event->subtitle }}</div>
        @endif
        <div class="text-sm sm:text-base eventinfo" id="{{ $divid }}">
            @if ($event->image)
            <x-image src="{{ asset('storage' . $event->image) }}" alt="Couverture du livre" type="event" float="left" margin="mr-[10px] mb-[5px]" maxsize="max-h-[150px] xl:max-h-[220px]" :bookid="$bookid" :eventid="$event->id" />
            @endif
            @if ($event->info)
            {{ render::make($event->info) }}
            @endif
        </div>
    </div>
</x-card>