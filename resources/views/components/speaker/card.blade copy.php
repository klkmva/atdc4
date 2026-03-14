@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'speaker',
])
@php
$height = ($speaker->info == '') ? ($speaker->image == null || $speaker->image == '' ? 'h-[3lh]' : 'h-[80px]') : 'lg:h-[200px] h-[110px]'
@endphp
<x-card class="w-full max-h-full min-h-37.5"
    bg="bg-stone-300 dark:bg-stone-800"
    border="border border-zinc-400 dark:border-zinc-400">
    <x-expandiv height="{{ $height }}">
        @if ($speaker->image)
        <div class="md:float-right inline m-2 h-full">
            <flux:avatar src="{{ $speaker->image }}" alt="" size="xl" />
        </div>
        @endif
        <div class="font-semibold sm:text-lg lg:text-xl text-base">{{ $speaker->full_name }}</div>
        @if ($speaker->info)
        <div class="text-sm sm:text-base">{{ render::make( $speaker->info )}}</div>
        @endif
    </x-expandiv>
</x-card>