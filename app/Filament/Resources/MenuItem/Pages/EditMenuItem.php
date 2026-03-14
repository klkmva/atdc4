<?php

namespace App\Filament\Resources\MenuItem\Pages;

use App\Filament\Resources\MenuItem\MenuItemResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditMenuItem extends EditRecord
{
    use \App\RedirectIndex;
    
    protected static string $resource = MenuItemResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
