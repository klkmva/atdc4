@blaze

@props([
'float' => 'right',
'margin' => 'ms-[3px]',
'maxsize' => 'max-h-8/10',
'type' => '',
])
<img @class([ 'rounded-sm outline outline-amber-50 outline-offset-2 p-[5px] bg-zinc-800'=> true,
'float-right' => $float === 'right',
'float-left' => $float === 'left',
'eventimg' => $type === 'event',
'speakerimg' => $type === 'speaker',
$margin => true,
$maxsize => true,
])
{{ $attributes }} onerror="this.style='display:none'" />