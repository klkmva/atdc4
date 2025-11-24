<?php

namespace App\Filament\Resources\Actus\Pages;

use App\Filament\Resources\Actus\ActuResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListActus extends ListRecords
{
    protected static string $resource = ActuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Liste des actualités';
    }
}
