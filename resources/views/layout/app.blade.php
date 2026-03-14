<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ $title ?? config('app.name') }}</title>
    <link rel="stylesheet" href="/css/app-styles.css">
    <script src="/js/he.js"></script>
    <script>
        const resize_observer = new ResizeObserver((entries) => {
            for (const entry of entries) {
                const target = entry.target;
                if (target.getAttribute('state') == 'up' && target.scrollHeight <= target.clientHeight) {
                    [...target.querySelectorAll('button')].forEach((btn) => {
                        btn.classList.toggle('hidden!', true)
                    })
                }
            }
        })

        function wload() {
            [...document.getElementsByClassName('speakerscontainer')].forEach((el) => {
                el.parentElement.style = 'min-height:' + el.getBoundingClientRect().height + 'px'
            });
            [...document.getElementsByClassName('eventimg')].forEach((el) => {
                el.parentElement.style = 'min-height:' + el.getBoundingClientRect().height + 'px'
            });
        }
        window.addEventListener('livewire:navigated', () => {
            wload()
        });
        window.addEventListener('livewire:load', () => {
            wload()
        });
        window.addEventListener('resize', () => {
            wload()
        });

        function wexpand(btn) {
            states = {
                "up": {
                    "state": "down",
                    "style": "height: fit-content; padding-bottom: 40px"
                },
                "down": {
                    "state": "up",
                    "style": ''
                }
            }
            const dv = btn.parentElement;
            var state = dv.getAttribute('state');
            if (state == 'up') {
                document.querySelectorAll('button').forEach((button) => {
                    if (button.classList.contains('up') && !button.classList.contains('hidden!'))
                        wexpand(button);
                })
            }
            dv.querySelector('button.' + state).classList.toggle('hidden!');
            dv.setAttribute('style', states[state]['style']);
            dv.setAttribute('state', states[state]['state']);
            state = dv.getAttribute('state');
            dv.querySelector('button.' + state).classList.toggle('hidden!');
            dv.scrollIntoView({
                behavior: 'smooth',
                block: 'end',
                container: 'nearest'
            });
            wload();

        }
    </script>

    @vite(['resources/js/app.js'])

    @fluxAppearance
    @livewireStyles
</head>

<body class="h-screen! w-full! p-0! m-0!">
    <x-header id="header" />

    <div class="m-0 p-0 w-full h-[calc(100vh-75px)] sticky overflow-clip">
        {{ $slot }}
    </div>

    @fluxScripts
    @livewireScripts
</body>

</html>