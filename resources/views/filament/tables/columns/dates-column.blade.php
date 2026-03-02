@php
use Carbon\Carbon;
$dates = $record->dates;
@endphp
<div style="margin-block: 10px; margin-inline: 5px" validate>
    @foreach ($dates as $date)
    <x-filament::badge class="first-of-type:mt-0 mt-2 cursor-pointer" title="Valider l'option" onclick="clicked({{ $date->id }})">
        {{ Carbon::parse($date->date)->locale('fr_FR')->isoFormat('ddd Do/MM/YYYY') }}
    </x-filament::badge>
    <a style="display: none" href="{{ route('validate', ['data' => $date->id . '-' . $record->id]) }}" id="link_{{ $date->id }}"></a><br />
    @endforeach
</div>
<script>
    async function clicked(id) {
        if (window.confirm('test')) {
            document.getElementById('link_' + id).click();
        }
    }
    [...document.querySelectorAll('div[validate]')].forEach((div) => {
        const chld = div.firstChild;
        if (chld.tagName == 'A') {
            const content = chld.innerHTML;
            chld.remove();
            div.innerHTML = content + div.innerHTML;
        }
    })
</script>