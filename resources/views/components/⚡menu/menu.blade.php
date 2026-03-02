<flux:navbar class="-mb-px max-lg:hidden w-full">
    <flux:navbar.item href="/" :current="request()->is('/')" wire:navigate>Programme</flux:navbar.item>
    <flux:navbar.item href="/archives" :current="request()->is('archives*')" wire:navigate>Archives</flux:navbar.item>
    @foreach ($items as $item)
        @if($item->type == 'menu')
        <flux:navbar.item href="/page/{{ $item->url }}" :current="request()->is('/{{ $item->url }}')" wire:navigate>{{ $item->title }}</flux:navbar.item>
        @endif
    @endforeach
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