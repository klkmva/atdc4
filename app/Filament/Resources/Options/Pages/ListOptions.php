<?php

namespace App\Filament\Resources\Options\Pages;

use App\Filament\Resources\Options\OptionResource;
use Filament\Actions\CreateAction;
use Filament\Resources\Pages\ListRecords;

class ListOptions extends ListRecords
{
    protected static string $resource = OptionResource::class;

    protected static string | null $title = 'Liste des options posées';

    protected function getHeaderActions(): array
    {
        return [
            CreateAction::make(),
        ];
    }
}
