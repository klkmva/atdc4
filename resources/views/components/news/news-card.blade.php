@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props([
'new',
])
<x-card class="w-8/10 shadow-2xs ms-2">
    <h2 class="font-semibold mb-[1lh] text-2xl">{{ $new->title }}</h2>
    <x-image src="/icons/logo.png" alt="" float='right' margin='ml-[10px] mb-[5px]' maxsize='max-h-[65px]' />
    {{ render::make($new->info) }}
</x-card>