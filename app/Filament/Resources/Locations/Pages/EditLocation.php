<?php

namespace App\Filament\Resources\Locations\Pages;

use App\Filament\Resources\Locations\LocationResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditLocation extends EditRecord
{
    use \App\RedirectIndex;

    protected static string $resource = LocationResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier le lieu de conférence';
    }
}
