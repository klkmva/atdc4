@props([
'height' => 'h-[200px]',
])
<div @class([ "relative overflow-hidden" => true,
    $height => true,
    ])
    @expand="wexpand(event.detail.btn);" state="up"
    x-init="observer.observe($el)">
    <flux:button @click="$dispatch('expand', {btn: event.currentTarget})" icon="chevron-down" class="absolute! bottom-0 right-0 down"></flux:button>
    <flux:button @click="$dispatch('expand', {btn: event.currentTarget})" icon="chevron-up" class="absolute! bottom-0 right-0 hidden! up"></flux:button>
    {{ $slot }}
</div>