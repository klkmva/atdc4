@blaze

<flux:modal name="search" class="p-0! w-auto! border! border-zinc-300 rounded-xl">
    <livewire:search />
</flux:modal>
<flux:header container sticky class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 w-full">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
    <flux:brand logo="/storage/images/icons/logo.png" name="ATDC" class="max-lg:hidden dark:hidden w-max" />
    <flux:brand logo="/storage/images/icons/logo.png" name="ATDC" class="max-lg:hidden! hidden dark:flex w-max" />
    <flux:navbar class="-mb-px max-lg:hidden w-full">
        <flux:navbar.item href="/" :current="request()->is('/')" wire:navigate>Programme</flux:navbar.item>
        <flux:navbar.item href="/archives" :current="request()->is('archives*')" wire:navigate>Archives</flux:navbar.item>
        <flux:navbar.item href="/asso" :current="request()->is('asso')" wire:navigate>L'association</flux:navbar.item>
        <flux:spacer />
        <flux:navbar class="me-4 w-full justify-end">
            <flux:tooltip content="Effectuer une recherche" position="right">
                <flux:modal.trigger name="search">
                    <flux:icon.magnifying-glass class="me-5" tooltip="Rechercher..." x-on:click="$flux.modal('search').show()" />
                </flux:modal.trigger>
            </flux:tooltip>
            <flux:tooltip content="Mode clair" position="top">
                <flux:icon.moon class="self-end hidden dark:inline" tooltip="Mode clair" x-data x-on:click="$flux.dark = ! $flux.dark" />
            </flux:tooltip>
            <flux:tooltip content="Mode sombre" position="top">
                <flux:icon.sun class="self-end dark:hidden" tooltip="Mode sombre" x-data x-on:click="$flux.dark = ! $flux.dark" />
            </flux:tooltip>
        </flux:navbar>
    </flux:navbar>
</flux:header>

<flux:sidebar sticky collapsible="mobile" class="lg:hidden bg-zinc-50 dark:bg-zinc-900 border-r border-zinc-200 dark:border-zinc-700">
    <flux:sidebar.header>
        <flux:sidebar.brand
            href="/"
            logo="/storage/images/icons/logo.png"
            logo:dark="/storage/images/icons/logo.png"
            name="Atdc" />
        <flux:modal.trigger name="search">
            <flux:icon.magnifying-glass class="me-5" x-on:click="$flux.modal('search').show()" />
        </flux:modal.trigger>
        <flux:icon.moon class="self-end hidden dark:inline" x-data x-on:click="$flux.dark = ! $flux.dark" />
        <flux:icon.sun class="self-end dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" />
        <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
    </flux:sidebar.header>
    <flux:sidebar.nav>
        <flux:sidebar.item href="/" current>Programme</flux:sidebar.item>
        <flux:sidebar.item href="/archives">Archives</flux:sidebar.item>
        <flux:sidebar.item href="/asso">L'association</flux:sidebar.item>
    </flux:sidebar.nav>
</flux:sidebar>