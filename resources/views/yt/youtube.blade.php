@blaze

@props([
'result'
]);

<div>
    <ul>
        @if ($result['fatal_error'])
        <h2>Echec de la mise à jour</h2>
        <p>{{ $result['fatal_error']  }}</p>
        @else
        <li>
            Nombre d'enregistrements mis à jour : {{ $result['update'] }}
        </li>
        <li>
            Nombre d'enregistrements à jour : {{ $result['nothing'] }}
        </li>
        <li>
            Vidéos en ligne mais absente de la base de données : {{ sizeof($result['not_in_db']) }}
            @if (sizeof($result['not_in_db']) > 0)
            <ul>
                @for ($i=0; $i<sizeof($result['not_in_db']); $i++)
                <li>
                    {{ $result['not_in_db'][$i]['date'] }} - {{ $result['not_in_db'][$i]['title'] }}
                </li>
                @endfor
            </ul>
            @endif
        </li>
        <li>
            Vidéos Youtube sans indication de date : {{ sizeof($result['no_date']) }}
            @if (sizeof($result['no_date']) > 0)
            <ul>
                @for ($i=0; $i<sizeof($result['no_date']); $i++)
                <li>
                    {{ $result['no_date'][$i]['title'] }}
                </li>
                @endfor
            </ul>
            @endif
        </li>
        @endif
    </ul>
</div>
