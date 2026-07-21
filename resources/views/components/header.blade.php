@blaze

<flux:modal name="search" class="sm:w-[50vw] w-[80vw]" flyout variant="floating">
    <livewire:search />
</flux:modal>
<flux:header container sticky class="bg-zinc-50 dark:bg-zinc-900 border-b border-zinc-200 dark:border-zinc-700 w-full">
    <flux:sidebar.toggle class="lg:hidden" icon="bars-2" inset="left" />
    <flux:brand logo="/storage/images/icons/logo.png" name="ATDC" class="max-lg:hidden dark:hidden w-max" />
    <flux:brand logo="/storage/images/icons/logo.png" name="ATDC" class="max-lg:hidden! hidden dark:flex w-max" />
    <livewire:menu />
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
        <flux:icon.sun class="self-end hidden dark:inline" x-data x-on:click="$flux.dark = ! $flux.dark" />
        <flux:icon.moon class="self-end dark:hidden" x-data x-on:click="$flux.dark = ! $flux.dark" />
        <flux:sidebar.collapse class="in-data-flux-sidebar-on-desktop:not-in-data-flux-sidebar-collapsed-desktop:-mr-2" />
    </flux:sidebar.header>
    <livewire:sidemenu />
</flux:sidebar>