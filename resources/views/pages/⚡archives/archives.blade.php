<div id="content" class="overflow-scroll h-full w-full bg-stone-100 dark:bg-stone-900">
    @if ($search && $model)
    <livewire:items-list type='events' :model="$model" :search="$search" />
    @elseif ($year && $ymax && $ymin)
    <livewire:items-list type='events' :year="$year" :ymax="$ymax" :ymin="$ymin" />
    @else
    pouet
    @endif
</div>