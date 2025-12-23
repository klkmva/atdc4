<div>
    @if ($news->count() >0)
    <div class="mt-0 mb-[15px]">
        <flux:separator class="text-lg" text='Actualités' />
    </div>
    @endif
    @foreach ($news as $new)
    <x-news.item :$new wire:key="{{ $new->id }}" />
    @endforeach
    @if ($news->count() > 0)
    <div class="mt-[25px] mb-[15px]">
        <flux:separator class="text-lg" text='Conférences' />
    </div>
    @else
    <div class="mt-0 mb-[15px]">
        <flux:separator class="text-lg" text='Conférences' />
    </div>
    @endif
    @foreach ($events as $event)
    <x-event.item :$event wire:key="{{ $event->id }}" />
    @endforeach
</div>