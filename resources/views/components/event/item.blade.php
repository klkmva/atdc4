@blaze

@props([
'item',
])
@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
<div class="w-full relative">
    <x-date>
        <span>
            {{ $item->long_date }}
            @if ($item->location)
            <span class="hidden sm:inline">&#150;</span> {{ $item->location->name }}
                @if($item->location->google_maps_url )
                <span>
                    <a href="{{ $item->location->google_maps_url }}" target="_blank">
                        <x-gmdi-location-on-s fill="red" height="18px" class="inline" />
                    </a>
                </span>
                @endif
            @endif
        </span>
    </x-date>
    <x-event.card :event="$item" />
</div>