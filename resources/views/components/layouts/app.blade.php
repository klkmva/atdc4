<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="color-sheme" content="dark" />

    <title>{{ $title ?? 'Page Title' }}</title>
    <link rel="stylesheet" href="./css/app-styles.css">
    @fluxAppearance
</head>

<body class="max-h-screen w-full bg-white dark:bg-zinc-800 antialiased">
    <flux:header sticky container class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 relative">
        <flux:brand href="#" logo="/icons/logo.png" name="ATDC" class="max-lg:hidden dark:hidden" />
        <flux:brand href="#" logo="/icons/logo.png" name="ATDC" class="max-lg:hidden! dark:flex" />

        <flux:navbar class="-mb-px hidden sm:flex">
            <flux:navbar.item icon="home" href="#">Home</flux:navbar.item>
            <flux:navbar.item icon="inbox" badge="12" href="#" current>Inbox</flux:navbar.item>
            <flux:navbar.item icon="document-text" href="#">Documents</flux:navbar.item>
            <flux:navbar.item icon="calendar" href="#">Calendar</flux:navbar.item>

            <flux:separator vertical variant="subtle" class="my-2" />

            <flux:dropdown class="max-lg:hidden">
                <flux:navbar.item icon:trailing="chevron-down">Favorites</flux:navbar.item>

                <flux:navmenu>
                    <flux:navmenu.item href="#">Marketing site</flux:navmenu.item>
                    <flux:navmenu.item href="#">Android app</flux:navmenu.item>
                    <flux:navmenu.item href="#">Brand guidelines</flux:navmenu.item>
                </flux:navmenu>
            </flux:dropdown>
        </flux:navbar>

        <flux:dropdown class="block sm:hidden absolute right-0 mr-0.5">
            <flux:button icon="menu"></flux:button>
            <flux:menu>
                <flux:menu.item>Option 1</flux:menu.item>
                <flux:menu.item>Option 2</flux:menu.item>
            </flux:menu>
        </flux:dropdown>
    </flux:header>

    <flux:main container>

        <flux:text class="mt-2 mb-6 text-base">{{ $slot }}</flux:text>

    </flux:main>
    @fluxScripts
</body>

</html>