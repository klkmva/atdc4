<?php

namespace App\Filament\Clusters\Books\Resources\Books\Pages;

use App\Filament\Clusters\Books\Resources\Books\BookResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBook extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = BookResource::class;
}
