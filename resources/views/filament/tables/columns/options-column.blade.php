@php
$options = $record->options;
@endphp

<div {{ $getExtraAttributeBag() }} style="margin-block: 10px;" title="Valider l'option'">
    @foreach ($options as $option)
    <x-filament::badge>
        {{ $option->book->title }}
    </x-filament::badge><br />
    @endforeach
</div>