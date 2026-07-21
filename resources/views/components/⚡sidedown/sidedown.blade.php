@blaze

<flux:sidebar.group expandable :heading="$item['title']" class="grid">
    @foreach ($item['items'] as $option)
    @if ($option['type'] == 'page')
        <flux:sidebar.item :href="$option['url']">{{ $option['title'] }}</flux:sidebar.item>
    @else
        <livewire:sidedown :item="$item" />
    @endif
    @endforeach
</flux:sidebar.group>