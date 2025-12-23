<div>
    @foreach ($events as $event)
    <x-event.item :event="$event"></x-event-item>
    @endforeach
</div>