@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'speaker',
])
@php
    $height = ($speaker->info == '') ? 'h-[2rem]' : 'h-[200px]'
@endphp
<x-card class="w-full max-h-full min-h-37.5"
    bg="bg-zinc-300 dark:bg-zinc-800" 
    border="border border-zinc-400 dark:border-zinc-400">
    <x-expandiv height="{{ $height }}">
        @if ($speaker->image)
        <x-image src="{{ $speaker->image }}" alt="" float='left' margin='mr-[10px] mb-[5px]' maxsize='max-h-[100px]' />
        @endif
        <h2 class="font-semibold text-xl">{{ $speaker->full_name }}</h2>
        @if ($speaker->info)
        <div>{{ render::make( $speaker->info )}}</div>
        @endif
    </x-expandiv>
</x-card>