<?php

namespace App\Filament\Clusters\Books\Resources\Books\Pages;

use App\Filament\Clusters\Books\Resources\Books\BookResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditBook extends EditRecord
{
    use \App\RedirectIndex;

    protected static string $resource = BookResource::class;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }
}
