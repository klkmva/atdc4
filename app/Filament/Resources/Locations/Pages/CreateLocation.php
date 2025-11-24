<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\locations\locationResource;
use Filament\Resources\Pages\CreateRecord;

class Createlocation extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = locationResource::class;

    public function getTitle(): string
    {
        return 'Créer un lieu de conférence';
    }
}
