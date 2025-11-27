<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Resources\Pages\CreateRecord;

class CreateEvent extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = EventResource::class;

    public function getTitle(): string
    {
        return 'Créer une conférence';
    }
}
