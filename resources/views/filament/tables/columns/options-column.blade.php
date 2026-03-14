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
    async function clicked(url) {
            if (window.confirm('Ceci créera une nouvelle conférence,\n bloquera la date et supprimera l\'option.\n\nnVoulez-vous continuer ?')) {
                try {
                    const response = await fetch(url)
                    if (response.ok) {
                        const result = await response.json();
                        window.location.href = result.url;
                    }
                } catch (error) {
                    console.log(error);
                    window.alert(error);
                }
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