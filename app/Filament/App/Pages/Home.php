<?php

namespace App\Filament\App\Pages;

use Filament\Pages\Page;


class Home extends Page
{
    protected string $view = 'filament.app.pages.home';

    protected Static ?string $navigationLabel = 'Accueil';

    protected static ?string $title = '';

    protected static ?int $navigationSort = 0;
}
