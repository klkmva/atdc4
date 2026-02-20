@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'event',
])
<x-card size="w-full h-full" margin="mb-[1lh]">
    <div class="w-full text-xs sm:text-base eventcontainer">
        <div class="w-full sm:w-3/10 sm:float-right ml-1 h-full speakerscontainer">
            @foreach ($event->speakers as $speaker)
            <x-speaker.card :speaker="$speaker" class=" w-full sm:w-3/10"></x-card>
            @endforeach
        </div>
        <h2 @class([ "font-semibold sm:text-3xl text-xl text-zinc-700 dark:text-amber-400"=> true,
            "mb-[1lh]" => $event->subtitle == '',
            ])>
            {{ $event->title }}
        </h2>
        @if ($event->subtitle != '')
        <h2 class="font-semibold mb-[1lh] sm:text-xl text-lg dark:text-amber-300 text-zinc-600">{{ $event->subtitle }}</h2>
        @endif
        <div>
            @if ($event->image)
            <x-image type="event" src="{{ $event->image }}" alt="" style="float:inline-start" margin="mr-[10px] mb-[5px]" maxsize="max-h-[150px]" />
            @endif
            @if ($event->info)
            {{ render::make($event->info) }}
            @endif
        </div>
    </div>
</x-card>