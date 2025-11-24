<?php

namespace App\Filament\Resources\Actus\Pages;

use App\Filament\Resources\Actus\ActuResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditActu extends EditRecord
{
    protected static string $resource = ActuResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier l\'actualité';
    }
}
