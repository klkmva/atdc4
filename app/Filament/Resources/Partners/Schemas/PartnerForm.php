<?php

namespace App\Filament\Resources\Partners\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PartnerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                TextInput::make('name')
                    ->label('Nom du partenaire')
                    ->placeholder('Nom')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),
                TextInput::make('short_name')
                    ->label('Nom abrégé')
                    ->placeholder('Nom abrégé')
                    ->maxLength(50)
                    ->columnSpan(2),
                TextInput::make('website')
                    ->label('Site web')
                    ->placeholder('https://exemple.com')
                    ->url()
                    ->maxLength(255)
                    ->columnSpan(2),
                Select::make('contact_id')
                    ->label('Contact')
                    ->relationship('contact', 'full_name')
                    ->placeholder('Sélectionner un contact')
                    ->searchable('name')
                    ->searchingMessage('Recherche un contact...')
                    ->preload()
                    ->createOptionForm([
                        Section::make('Identité')
                            ->columns(2)
                            ->schema([
                                TextInput::make('last_name')
                                    ->label('Nom')
                                    ->placeholder('Nom du contact')
                                    ->required()
                                    ->maxLength(255),
                                TextInput::make('first_name')
                                    ->label('Prénom')
                                    ->placeholder('Prénom du contact')
                                    ->maxLength(255),
                            ])->columnSpan(2),
                        Section::make('Coordonnnées')
                            ->columns(3)
                            ->columnSpanFull()
                            ->schema([
                                TextInput::make('email')
                                    ->label('Email')
                                    ->placeholder('Adresse email')
                                    ->email()
                                    ->maxLength(255),
                                TextInput::make('phone1')
                                    ->label('Téléphone')
                                    ->placeholder('Numéro de téléphone')
                                    ->maxLength(50),
                                TextInput::make('company')
                                    ->label('Structure')
                                    ->placeholder('Structure à laquelle appartient le contact')
                                    ->maxLength(255),
                                TextInput::make('phone2')
                                    ->columnStart(2)
                                    ->hiddenLabel()
                                    ->placeholder('Numéro de téléphone')
                                    ->maxLength(50),
                            ]),
                    ])
                    ->columnSpan(2),
            ]);
    }
}
