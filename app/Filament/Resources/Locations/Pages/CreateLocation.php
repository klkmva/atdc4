<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\Locations\LocationResource;
use Filament\Resources\Pages\CreateRecord;
use PgSql\Lob;

class Createlocation extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = LocationResource::class;

    public function getTitle(): string
    {
        return 'Créer un lieu de conférence';
    }
}
