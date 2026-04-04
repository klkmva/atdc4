@blaze
@use('App\Models\Book')
@use('App\Models\Publisher')

@props([
'float' => 'right',
'margin' => 'ms-[3px]',
'maxsize' => 'max-h-8/10',
'type' => '',
'bookid' => '0',
'eventid',
'book' => $bookid != '0' ? Book::find($bookid) : null,
])
@php
$publisher = (is_null($book) || is_null($book->publisher_id)) ? '' : Publisher::find($book->publisher_id)->name;
@endphp
<div @class([ 'float-right'=> $float === 'right',
    'float-left' => $float === 'left',
    $margin => true,
    'eventimg' => true,
    ])>
    <flux:modal.trigger :name="'show-image'.$eventid">
        <img @class([ 'rounded-sm outline outline-amber-50 outline-offset-2 p-[5px] bg-zinc-800'=> true,
        $maxsize => true,
        'eventimg' => $type === 'event',
        ])
        {{ $attributes }}
        onerror="this.style='display:none'"
        onload="document.getElementById('evinfo{{ $eventid }}').style='min-height:'+this.getBoundingClientRect().height+'px;'" />
    </flux:modal.trigger>
    <flux:modal :name="'show-image'.$eventid" class="w-[90vw] lg:w-[50vw] bg-stone-100! dark:bg-stone-900!" flyout>
        <div class="flex flex-col">
            <img {{ $attributes }} class="max-h-[50vh] max-w-[20vw] mx-auto" />
            @if(is_null($book))
            <div class="w-full text-center p-2">Aucune information enregistrée</div>
            @else
            <div class="my-5 relative w-full grid grid-cols-2">
                <div class="p-2 text-right">Éditeur :</div>
                <div class="p-2 text-left">{{ $publisher }}</div>
                <div class="p-2 text-right">Date de sortie :</div>
                <div class="p-2 text-left">{{ !is_null($book) ? $book->publication_date : 'null' }}</div>
                <div class="p-2 text-right">Auteur(s) :</div>
                <div class="p-2 text-left">{{ !is_null($book) ? $book->authors : 'null' }}</div>
                <div class="p-2 text-right">ISBN :</div>
                <div class="p-2 text-left">{{ !is_null($book) ? $book->isbn : 'null' }}</div>
            </div>
            @endif
        </div>
    </flux:modal>
</div>