@php $attributes = $unescapedForwardedAttributes ?? $attributes; @endphp

@props([
'variant' => 'outline',
])

@php
$classes = Flux::classes('shrink-0')
->add(match($variant) {
'outline' => '[:where(&)]:size-6',
'solid' => '[:where(&)]:size-6',
'mini' => '[:where(&)]:size-5',
'micro' => '[:where(&)]:size-4',
});
@endphp

<svg {{ $attributes->class($classes) }} data-flux-icon aria-hidden="true"
    xmlns="http://www.w3.org/2000/svg"
    width="24"
    height="24"
    viewBox="0 0 24 24"
    fill="none"
    stroke="currentColor"
    stroke-width="2"
    stroke-linecap="round"
    stroke-linejoin="round" >
    <path d="M4 5h16" />
    <path d="M4 12h16" />
    <path d="M4 19h16" />
</svg>