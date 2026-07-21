@php
use Carbon\Carbon;
$options = $record->options;
@endphp
<div style="margin-block: 10px; margin-inline: 5px" validate>
    @foreach ($options as $option)
    <x-filament::badge class="first-of-type:mt-0 mt-2 cursor-pointer" title="Valider l'option" @click="document.getElementById('link_{{ $option->id }}').click()">
        {{ $option->title }}
    </x-filament::badge>
    <a style="display: none" href="javascript:clicked('{{ route('validate', ['data' => $record->id . '-' . $option->id]) }}')" id="link_{{ $option->id }}"></a><br />
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