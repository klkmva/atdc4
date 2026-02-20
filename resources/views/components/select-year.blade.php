@blaze

@props([
'ymax',
'ymin',
'year' => null,
])

<?php if (!$year) $year = $ymax; ?>
<a id="selectLink" href="" wire:navigate class="hidden"></a>
<select class="relative text-xs p-1 rounded-sm bg-amber-50 text-black dark:bg-zinc-900 dark:text-white" onchange="">
    @for ($i = \intval($ymax); $i >= \intval($ymin); $i--)
    <option value="{{ $i }}" {{ $i == $year ? 'selected' : '' }} wire:key="{{ $i }}">{{ $i }}</option>
    @endfor
</select>