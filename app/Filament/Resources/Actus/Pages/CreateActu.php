<?php

namespace App\Filament\Resources\Actus\Pages;

use App\Filament\Resources\Actus\ActuResource;
use Filament\Resources\Pages\CreateRecord;

class CreateActu extends CreateRecord
{
    protected static string $resource = ActuResource::class;

    public function getTitle(): string
    {
        return 'Créer une actualité';
    }
}
