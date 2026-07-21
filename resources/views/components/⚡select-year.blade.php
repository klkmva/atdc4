<?php

use Livewire\Component;

new class extends Component
{
    public $year;
    public $ymax;
    public $ymin;

    public function routeTo($y) {
        $this->redirectRoute('archives', ['year' => $y]);
    }
};
?>

<select class="relative text-base sm:text-xl p-1 rounded-sm bg-amber-50 text-black dark:bg-zinc-900 dark:text-white" wire:change="routeTo($event.target.value)">
    @for ($i = \intval($ymax); $i >= \intval($ymin); $i--)
    <option value="{{ $i }}" {{ $i == $year ? 'selected' : '' }} wire:key="{{ $i }}">{{ $i }}</option>
    @endfor
</select>