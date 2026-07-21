<?php

namespace App\Filament\Resources\Bulletins\Schemas;

use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Schema;

class BulletinForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('tabs')->tabs([
                    Tab::make('Contenu')
                        ->schema([
                            TextInput::make('number')
                                ->label('Numéro'),
                            TextInput::make('period')
                                ->label('Période'),
                            Select::make('events')
                                ->multiple()
                                ->label('Évènements')
                                ->relationship('events', 'title')
                                ->preload(),
                        ]),
                    Tab::make('Éditorial')
                        ->schema([
                            TextInput::make('edito_title')
                                ->label('Titre'),
                            Textarea::make('edito')
                                ->hiddenLabel(),
                        ])
                ])
            ]);
    }
}
