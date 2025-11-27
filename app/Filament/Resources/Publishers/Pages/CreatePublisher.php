<?php

namespace App\Filament\Resources\Publishers\Pages;

use App\Filament\Resources\Publishers\PublisherResource;
use Filament\Resources\Pages\CreateRecord;

class CreatePublisher extends CreateRecord
{
    use \App\RedirectIndex;

    protected static string $resource = PublisherResource::class;
}
