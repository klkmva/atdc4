@php
use Carbon\Carbon;
$dates = $record->dates;
@endphp
<div style="margin-block: 10px; margin-inline: 5px" validate>
    @foreach ($dates as $date)
    <flux:badge inset="top bottom" color="red" variant="solid" @click="clicked({{ $date->id }})" style="cursor:pointer" title="Valider cette date">
        {{ Carbon::parse($date->date)->locale('fr_FR')->isoFormat('ddd DD/MM/YYYY') }}
    </flux:badge>
    <a style="display: none" href="{{ route('validate', ['data' => $date->id . '-' . $record->id]) }}" id="link_{{ $date->id }}"></a><br /><br />
    @endforeach
</div>
<script>
    async function clicked(id) {
        if (window.confirm('Ceci créera une nouvelle conférence, bloquera la date et supprimera l\'option.\nVoulez-vous continuer ?')) {
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