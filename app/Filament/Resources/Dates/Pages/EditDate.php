<?php

namespace App\Filament\Resources\Dates\Pages;

use App\Filament\Resources\Dates\DateResource;
use Filament\Actions\DeleteAction;
use Filament\Actions\ForceDeleteAction;
use Filament\Actions\RestoreAction;
use Filament\Resources\Pages\EditRecord;

class EditDate extends EditRecord
{
    use \App\RedirectIndex;

    protected static string $resource = DateResource::class;

    protected static string | null $title = 'Enregistrer une nouvelle date';
    
    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
