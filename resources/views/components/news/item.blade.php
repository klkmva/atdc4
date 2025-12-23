@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
<div class="w-full">
    <div class="mb-8 ml-[5px] font-light text-2xl">{{ render::make($new->long_date) }}</div>
    <x-news.news-card :new="$new" />
</div>