@blaze

<flux:dropdown>
    <flux:navbar.item icon:trailing="chevron-down">{{ $item['title'] }}</flux:navbar.item>
    <flux:navmenu>
        @foreach ($item['items'] as $option)
        @if ($option['type'] == 'page')
        <flux:navbar.item href="/page/{{ $option['id'] }}" wire:current="request()->is('/page/{{ $option['id'] }}')">{{ $option['title'] }}</flux:navbar.item>
        @else
        <livewire:dropdown :item="$item" />
        @endif
        @endforeach
    </flux:navmenu>
</flux:dropdown>