@blaze

@props([
'event' => null,
'type' => null,
])
@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@php
$speakers = $event->speakers;
$size = sizeof($speakers);
if ($size > 0) {
$speaktext = 'Conférence de ' . $speakers[0]->full_name;
for ($i=1; $i<$size; $i++) {
    $speaktext=$speaktext . (($i==$size-1) ? ' et ' : ', ' ) . $speakers[$i]->full_name;
    }
    }
    else
    $speaktext = '';
    $app_url = ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['SERVER_NAME'];
    @endphp
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap');

        body {
            background-color: #eaecea;
            color: #1e1c1e;
            margin: 0;
            padding: 0;
        }

        .entete {
            display: flex;
            flex-direction: row;
            padding: 1em;
            margin-bottom: 2em;
        }

        .entete img {
            margin-right: 2em;
        }

        .brand {
            font-family: 'Philosopher';
            font-size: 2em;
        }

        .date {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 2em;
            font-weight: 600;
            text-align: center;
        }

        .place {
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-size: 1.2em;
            font-style: italic;
            text-align: center;
        }

        .title {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2.3em;
            text-align: center;
            margin-top: 1em;
            font-weight: 800;
        }

        .subtitle {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            font-size: 2em;
            font-style: italic;
            text-align: center;
        }

        .speakers {
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
            font-size: 2.3em;
            text-align: center;
            margin-top: 1.5em;
        }

        .info {
            position: relative;
            width: 70vw;
            margin: auto;
            font-size: 1.2em;
        }

        .info img {
            float: left;
            margin-right: 1.5em;
            max-height: 200px;
        }

        .foot {
            text-align: center;
            font-size: 90%;
            font-style: normal;
            padding-block: 5px;
            border-bottom: 1px lightgray solid;
        }

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1e1c1e;
                color: #eaecea;
            }

            a {
                color: red;
            }
        }
    </style>

    <div class="entete">
        <img src="{{ $app_url }}/images/icons/logo.png" alt="logo des ATDC" width="30px" height="30px" />
        <div class="brand">Les Amis du Temps des Cerises</div>
    </div>
    <div class="body">
        <div class="date">La conférence du {{ $event->long_date }} est annulée</div>
        <div class="place">{{ $event->location->full_name }}</div>
        <div class="speakers">{{ $speaktext }}</div>
        <div class="title">{{ $event->title }}</div>
        @if ($event->subtitle)
        <div class="subtitle">{{ $event->subtitle }}</div>
        @endif
        <div class="info">
            @if ($event->image)
            <img src="{{ $app_url . $event->image }}" alt="Image de la conférence" onerror="this.style='display:none';" />
            @endif
            {{ render::make($event->info) }}
        </div>
    </div>
    <div class="foot">Retrouvez toutes nos conférences sur <a href="https://amisdutempsdescerises.org" target="_blank">https://amisdutempsdescerises.org</a>.</div>
