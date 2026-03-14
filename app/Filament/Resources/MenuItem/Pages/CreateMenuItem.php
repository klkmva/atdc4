<?php

namespace App\Filament\Resources\MenuItem\Pages;

use App\Filament\Resources\MenuItem\MenuItemResource;
use Filament\Resources\Pages\CreateRecord;

class CreateMenuItem extends CreateRecord
{
    use \App\RedirectIndex;
    
    protected static string $resource = MenuItemResource::class;
}
