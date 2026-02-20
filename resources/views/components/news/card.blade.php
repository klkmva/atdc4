@blaze

@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@props(['item',])
<x-card size="w-full h-full" margin="mb-[1lh]">
    <div class="w-full sm:text-xs eventcontainer">
        <h2 class="font-semibold sm:text-3xl text-xl text-amber-500">
            {{ $item->title }}
        </h2>
        <div>
            @if ($item->image)
            <x-image type="news" src="{{ $item->image }}" alt="" style="float:inline-start" margin="mr-[10px] mb-[5px]" maxsize="max-h-[150px]" />
            @endif
            @if ($item->info)
            {{ render::make($item->info) }}
            @endif
        </div>
    </div>
</x-card>