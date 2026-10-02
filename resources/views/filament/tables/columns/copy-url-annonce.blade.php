@php
use Filament\Support\Icons\Heroicon;
@endphp

<div {{ $getExtraAttributeBag() }}>
    <div id="notifWrapper" class="fixed top-4 w-64 right-4 space-y-2"></div>
    @if (\Carbon\Carbon::parse($record->date)->greaterThan(\Carbon\Carbon::today()))
    <a href="javascript:copy('https://amisdutempsdescerises.org/annonce/{{ $record->canceled ? 'cancel' : 'announce' }}/{{ $record->id }}', 'L\'url est dans le presse papier');">
        <x-filament::icon-button icon="heroicon-o-megaphone" color="{{ $record->canceled ? 'primary' : 'success' }}"
            title="Copie l'url de l'annonce {{ $record->canceled ? 'd\'annulation' : 'de la conférence' }}">
        </x-filament::icon-button>
    </a>
    @endif
</div>
