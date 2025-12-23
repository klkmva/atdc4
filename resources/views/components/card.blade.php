@props([
    'width' => 'w-full',
    'margin' => 'm-0',
    'shadow' => '',
    ])
<article @class([
    "rounded-md p-3 sm:p-6 bg-zinc-600 min-h-max" => true,
    $width => true,
    $margin => true,
    $shadow => $shadow != '',
    ])
    {{ $attributes }}>
    {{ $slot }}
</article>