@blaze

<flux:sidebar.nav>
    <flux:sidebar.item href="/" :current="request()->is('/')" wire:navigate>Programme</flux:sidebar.item>
    <flux:sidebar.item href="/archives" :current="request()->is('archives*')" wire:navigate>Archives</flux:sidebar.item>
    @foreach ($items as $item)
        @if($item->type == 'page')
        <flux:sidebar.item href="/page/{{ $item->id }}" wire:current="request()->is('/page/{{ $item->id }}')">{{ $item->title }}</flux:sidebar.item>
        @endif
    @endforeach
</flux:sidebar.nav>