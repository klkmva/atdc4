<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="/css/app-styles.css">
    <script src="/js/he.js"></script>

    @vite(['resources/js/app.js'])

    @fluxAppearance
    @livewireStyles
</head>

<body class="h-screen! w-full! p-0! m-0!">
    <x-header id="header" />

    <div class="m-0 p-0 w-full h-[calc(100vh-75px)] sticky overflow-clip">
        {{ $slot }}
    </div>
    <script>
        function wload() {
            [...document.getElementsByClassName('speakerscontainer')].forEach((el) => {
                el.parentElement.style = 'min-height:' + el.getBoundingClientRect().height + 'px'
            });
            [...document.getElementsByClassName('eventinfo')].forEach((el) => {
                const img = el.querySelector('img');
                if (img) {
                    el.style = 'min-height:' + img.getBoundingClientRect().height + 'px'
                }
            });
        }
        window.addEventListener('load', () => { wload() });
        document.addEventListener('livewire:navigated', () => { wload() });
        document.addEventListener('livewire:load', () => { wload() });
        window.addEventListener('resize', () => { wload() });
    </script>

    @fluxScripts
    @livewireScripts
</body>

</html>