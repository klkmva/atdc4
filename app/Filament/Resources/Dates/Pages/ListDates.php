<?php

namespace App\Filament\Resources\Dates\Pages;

use App\Filament\Resources\Dates\DateResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListDates extends ListRecords
{
    protected static string $resource = DateResource::class;

    protected static string | null $title = 'Liste des dates octroyées par la mairie';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
