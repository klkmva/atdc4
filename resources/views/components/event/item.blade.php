@blaze

@props([
    'item',
])
@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
<div class="w-full relative">
    <x-date>{{ $item->long_date }}@if ($item->location) &#150; {{ $item->location->name }}@endif</x-date>
    <x-event.card :event="$item" />
</div>