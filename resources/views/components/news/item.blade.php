@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
<div class="w-full relative">
    <x-date>{{ $item->long_date }}</x-date>
    <x-news.card :$item />
</div>