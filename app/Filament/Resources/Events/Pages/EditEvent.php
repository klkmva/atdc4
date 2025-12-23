<?php

namespace App\Filament\Resources\Events\Pages;

use App\Filament\Resources\Events\EventResource;
use Filament\Actions\DeleteAction;
use Filament\Resources\Pages\EditRecord;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class EditEvent extends EditRecord
{
    use \App\RedirectIndex;

    protected static string $resource = EventResource::class;

    public string $image;

    protected function getHeaderActions(): array
    {
        return [
            DeleteAction::make(),
        ];
    }

    public function getTitle(): string
    {
        return 'Modifier la conférence';
    }

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        $image = $data['image'] ?? null;
        return parent::handleRecordUpdate($record, $data);
    }
}
