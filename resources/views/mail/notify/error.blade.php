@blaze

@props([
'event' => null,
'type' => null,
])

<div>
    @if ($type == 'caanceled')
    Erreur : vous annoncez l'annulation de la conférence {{ $event->title }} qui n'est pas annulée !
    @else
    Erreur : vous annoncez la tenue de la conférence {{ $event->title }} qui est annulée !
    @endif
</div>
