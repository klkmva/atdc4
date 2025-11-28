<?php

namespace App\Filament\Resources\News\Pages;

use App\Filament\Resources\News\NewsResource;
use Filament\Resources\Pages\CreateRecord;

class CreateNews extends CreateRecord
{
    use \App\RedirectIndex;
    
    protected static string $resource = NewsResource::class;

    public function getTitle(): string
    {
        return 'Créer une actualité';
    }
}
