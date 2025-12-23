@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'event',
])
<x-card width='w-full' shadow='' margin='mb-[1lh]'>
    <x-image src="/images/logo.png" alt="" float='right' margin='ml-[10px] mb-[5px]' maxsize='max-h-[65px]' />
    <h2 @class([ 'font-semibold text-2xl'=> true,
        'mb-[1lh]' => $event->subtitle == '',
        ])>
        {{ $event->title }}
    </h2>
    @if ($event->subtitle != '')
    <h2 class="font-semibold mb-[1lh] text-xl">{{ $event->subtitle }}</h2>
    @endif
    {{ render::make($event->info) }}
</x-card>