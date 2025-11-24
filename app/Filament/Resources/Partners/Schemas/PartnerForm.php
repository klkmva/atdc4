<?php

namespace App\Filament\Resources\Partners\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('name')
                    ->label('Nom du partenaire')
                    ->placeholder('Nom')
                    ->required()
                    ->maxLength(255),
                TextInput::make('short_name')
                    ->label('Nom abrégé')
                    ->placeholder('Nom abrégé')
                    ->maxLength(50),
                TextInput::make('website')
                    ->label('Site web')
                    ->placeholder('https://exemple.com')
                    ->url()
                    ->maxLength(255),
                Select::make('contact_id')
                    ->label('Contact')
                    ->relationship('contact', 'full_name')
                    ->placeholder('Sélectionner un contact')
                    ->columnSpan(1),
            ]);
    }
}
