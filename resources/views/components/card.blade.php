@blaze

@props([
'size' => 'w-full',
'margin' => 'm-0',
'padding' => 'p-3 sm:p-6',
'bg' => 'dark:bg-stone-600 bg-stone-200',
'border' => 'border-4 border-red-600',
'display' => '',
'class' => '',
'canceled' => "0",
])
<article @class([ "rounded-md" => true,
    $size => true,
    $margin => true,
    $padding => true,
    $bg => true,
    $display => true,
    $border => $canceled == "1",
    $class => true,
    ])
    {{ $attributes }}>
    {{ $slot }}
</article>