@blaze

@props([
'size' => 'w-full',
'margin' => 'm-0',
'padding' => 'p-3 sm:p-6',
'bg' => 'dark:bg-zinc-600 bg-zinc-200',
'border' => '',
'display' => '',
'class' => '',
])
<article @class([ "rounded-md" => true,
    $size => $class == '',
    $margin => true,
    $padding => true,
    $bg => true,
    $display => true,
    $border => $border != '',
    $class => true,
    ])
    {{ $attributes }}>
    {{ $slot }}
</article>