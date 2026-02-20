<?php

namespace App\Filament\Resources\Options\Pages;

use App\Filament\Resources\Options\OptionResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;

class EditOption extends EditRecord
{
    use \App\RedirectIndex;

    protected static string $resource = OptionResource::class;

    //protected static string | null $title = 'Modifier une option';
    public function getTitle(): string
    {
        return 'Modifier l\'option (' . Auth()->user()->name . ')';
    }

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

}
