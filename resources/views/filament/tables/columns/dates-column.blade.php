@php
$dates = $record->dates;
@endphp
<script>
    async function clicked(el) {
        console.log(el.dataset.date, el.dataset.option);
        if (window.confirm('test')) {
            $result = await fetch();
            console.log($result);
        }
    }
</script>
<div {{ $getExtraAttributeBag() }} style="margin-block: 10px;" title="Valider l'option">
    @foreach ($dates as $date)
    <a style="cursor: pointer; color:aqua;" href="{{ route('validate', ['date_id'=> $date->id, 'option_id' => $record->id]) }}">
        {{ $date->date }}
    </a><br />
    @endforeach
</div>