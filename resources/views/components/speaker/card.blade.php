@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'speaker',
])
@php
$height = ($speaker->info == '') ? ($speaker->image == null || $speaker->image == '' ? 'h-[3lh]' : 'h-[80px]') : 'lg:h-[200px] h-[110px]'
@endphp
<x-card class="w-full max-h-full h-auto cursor-pointer"
    bg="bg-stone-300 dark:bg-stone-800 hover:bg-stone-100 dark:hover:bg-stone-950"
    border="border border-zinc-400 dark:border-zinc-400 hover:border-2 hover:border-zinc-800 dark:hover:border-zinc-50">
    <flux:modal.trigger :name="'speaker_info'.$speaker->id">
        <div class="grid grid-cols-2">
            @if ($speaker->image)
            <div class="m-2 h-auto">
                <flux:avatar src="{{ asset('images' . $speaker->image) }}" alt="Photo de l'intervenant" size="xl" />
            </div>
            @endif
            <div class="font-semibold sm:text-xl lg:text-2xl text-base">{{ $speaker->full_name }}</div>
        </div>
    </flux:modal.trigger>
    <flux:modal :name="'speaker_info'.$speaker->id" flyout variant="floating">
        <div class="flex flex-col max-w-[80vw] sm:max-w-[60vw] lg:max-w-[20vw]" x-data
            x-init="
        const dial = $el.closest('dialog');
        if (dial) dial.style = window.screen.availWidth > 1024 ? 'max-width:20vw' : (window.screen.availWidth > 640 ? 'max-width:50vw' : 'max-width:90vw')">
            <div class="flex flex-row w-full">
                @if ($speaker->image)
                <div class="m-2 h-auto">
                    <flux:avatar src="{{ asset('images' . $speaker->image) }}" alt="Photo de l'intervenant" size="xl" />
                </div>
                @endif
                <div class="font-semibold sm:text-xl lg:text-2xl text-base ml-2 pt-2">{{ $speaker->full_name }}</div>
            </div>
            @if ($speaker->info)
            <div>{{ render::make($speaker->info) }}</div>
            @endif
        </div>
    </flux:modal>
</x-card>