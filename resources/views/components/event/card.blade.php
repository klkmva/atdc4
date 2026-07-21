@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@use('\App\Models\Event')
@props([
'event',
])
@php
$bookid = $event->book_id;
$divid = 'evinfo'.$event->id;
$canceled = '';
if ($event->canceled) {
    $repl_event = Event::where('date', $event->date)->where('id', '<>', $event->id)->where('canceled', 0)->count();
    $canceled = 'Conférence annulée' . ($repl_event ? '<br>et remplacée' : '');
}
@endphp
<x-card size="w-full h-full" margin="mb-[1lh]" class="{{ $event->canceled ? 'canceled' : '' }}">
    <div class="w-full text-xs sm:text-base relative">
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
        @if ($event->canceled)
            <div class="sm:text-3xl text-2xl text-red-600 font-bold canceled">{{ render::make($canceled) }}</div>
        @endif
        <div class="text-sm sm:text-base eventinfo" id="{{ $divid }}">
            @if ($event->image)
            <x-image src="{{ asset('images' . $event->image) }}" alt="Image liée à l'évènement" type="event" float="left" margin="mr-[10px] mb-[5px]" maxsize="max-h-[150px] xl:max-h-[220px]" :bookid="$bookid" :eventid="$event->id" />
            @endif
            @if ($event->info)
            {{ render::make($event->info) }}
            @endif
        </div>
    </div>
</x-card>