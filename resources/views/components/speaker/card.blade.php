@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'speaker',
])
@php
$height = ($speaker->info == '') ? ($speaker->image == null || $speaker->image == '' ? 'h-[3lh]' : 'h-[80px]') : 'lg:h-[200px] h-[110px]'
@endphp
<x-card class="w-full max-h-full h-auto"
    bg="bg-stone-300 dark:bg-stone-800"
    border="border border-zinc-400 dark:border-zinc-400">
    <flux:modal.trigger :name="'speaker_info'.$speaker->id">
        <div class="grid grid-cols-2">
            @if ($speaker->image)
            <div class="m-2 h-auto">
                <flux:avatar src="{{ $speaker->image }}" alt="" size="xl" />
            </div>
            @endif
            <div class="font-semibold sm:text-xl lg:text-2xl text-base">{{ $speaker->full_name }}</div>
        </div>
    </flux:modal.trigger>
    <flux:modal :name="'speaker_info'.$speaker->id" flyout variant="floating" class="max-w-[80vw] sm:max-w-[50vw] w-auto h-auto">
        <div class="grid grid-rows-2">
            <div class="m-2 h-auto">
                @if ($speaker->image)
                <img src="{{ $speaker->image }}" alt="" class="inline pr-4 w-16" onerror="this.style='display:none;margin-right:0;'" />
                @endif
                <div class="font-semibold sm:text-2xl lg:text-3xl text-xl inline">{{ $speaker->full_name }}</div>
            </div>
            @if ($speaker->info)
            <div>{{ render::make($speaker->info) }}</div>
            @endif
        </div>
    </flux:modal>
</x-card>