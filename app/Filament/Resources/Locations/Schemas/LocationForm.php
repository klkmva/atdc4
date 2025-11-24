<?php

namespace App\Filament\Resources\Locations\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Icon;
use Filament\Schemas\Schema;

class LocationForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nom du lieu')
                    ->placeholder('Nom du lieu de conférence')
                    ->required()
                    ->maxLength(255),
                TextInput::make('address')
                    ->label('Adresse')
                    ->placeholder('Adresse du lieu de conférence'),
                TextInput::make('google_maps_url')
                    ->label('Url GoogleMaps')
                    ->placeholder('Url GoogleMaps du lieu de conférence')
                    ->afterLabel(Icon::make('gmdi-location-on-o'))
                    ->maxLength(255),
            ]);
    }
}
