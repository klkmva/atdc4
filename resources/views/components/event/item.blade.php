@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
<div class="w-full">
    <div class="mb-8 ml-[5px] text-2xl text-amber-100 font-light">{{ render::make($event->long_date) }}</div>
    <x-event.event-card :event="$event" />
</div>