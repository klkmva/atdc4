<?php

namespace App\Filament\Resources\Options\Pages;

use App\Filament\Resources\Options\OptionResource;
use Filament\Resources\Pages\CreateRecord;

class CreateOption extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = OptionResource::class;

    //protected static string | null $title = 'Enregistrer une nouvelle option';
    public function getTitle(): string
    {
        return 'Enregistrer une nouvelle option (' . Auth()->user()->name . ')';
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $data['user_id'] = auth()->user()->id;

        return $data;
    }
}
