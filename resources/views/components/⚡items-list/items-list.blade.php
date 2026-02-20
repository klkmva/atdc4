<div @class([
    "w-full m-0 p-0" => true,
    "h-full" => ($type == 'events' && $items->count() == 0),
    ])>
    @if ($type == 'news')
        @if ($items->count() > 0)
        <x-separ>Actualités</x-separ>
        @endif
    @elseif ($type == 'events')
        @if ($path =='/')
        <x-separ>Programme des conférences</x-separ>
        @elseif (preg_match('/\/archives\/search.*/', $path))
        <x-separ>Résultat de la recherche <span class="max-w-sm ml-2">({{ $search }})</span></x-separ>
        @elseif (preg_match('/\/archives.*/', $path))
            @if (isset($year))
            <x-separ>Conférences archivées <span class="max-w-sm ml-2"><livewire:select-year :year="$year" :ymax="$ymax" :ymin="$ymin" /></span></x-separ>
            @else
            <x-separ>Conférences archivées <span class="max-w-sm ml-2"><livewire:select-year :year="$ymax" :ymax="$ymax" :ymin="$ymin" /></span></x-separ>
            @endif
        @endif
    @endif

    @if ($items->count() > 0)
    <div class="ml-1">
        <div class="listcontainer p-6 border-s-2 border-s-red-600 z-0">
            @forelse ($items as $item)
                @if ($type == 'news')
                <x-news.item :item=" $item" wire:key="{{ $item->id }}" />
                @else
                <x-event.item :item="$item" wire:key="{{ $item->id }}" />
                @endif
            @empty
            <div>Aucun item</div>
            @endforelse
        </div>
    </div>
    @elseif ($type == 'events')
    <div class="w-full h-8/10 flex flex-col justify-center items-center">
        <div class="text-2xl self-center">
            Aucun item
        </div>
    </div>
    @endif
</div>