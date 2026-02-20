<?php

namespace App\Filament\Resources\Dates\Pages;

use App\Filament\Resources\Dates\DateResource;
use Filament\Resources\Pages\CreateRecord;

class CreateDate extends CreateRecord
{
    use \App\RedirectIndex;
    
    protected static string $resource = DateResource::class;

    protected static string | null $title = 'Enregistrer une nouvelle date';
}
