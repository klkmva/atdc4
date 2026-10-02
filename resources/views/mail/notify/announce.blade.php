@blaze

@props([
'event' => null,
'type' => null,
'speaktext' => 'toto',
])
@use('\Filament\Forms\Components\RichEditor\RichContentRenderer', 'render')
@php
$speakers = $event->speakers;
$size = sizeof($speakers);
$speaktext = $speakers[0]->full_name;
//for ($i=0; $i<$size; $i++) {
    // $speaktext=$speaktext . $speakers[$i]->full_name . ($i==$size -1 && $size > 1) ? ' et ' : (($size > 1) ? ', ' : '');
    //}
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

        @media (prefers-color-scheme: dark) {
            body {
                background-color: #1e1c1e;
                color: #eaecea;
            }

        }
    </style>

    <div class="entete">
        <img src="{{ env('APP_URL') }}/images/icons/logo.png" alt="logo des ATDC" width="30px" height="30px" />
        <div class="brand">Les Amis du Temps des Cerises</div>
    </div>
    <div class="body">
        <div class="date">{{ $event->long_date }}</div>
        <div class="place">{{ $event->location->full_name }}</div>
        <div class="speakers">Conférence de {{ $speaktext }}</div>
        <div class="title">{{ $event->title }}<br /><br /></div>
        <div class="info"><img src="{{ env('APP_URL') . $event->image }}" alt="Image de la conférence">{{ render::make($event->info) }}</div>
    </div>
