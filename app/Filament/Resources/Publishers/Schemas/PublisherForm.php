<?php

namespace App\Filament\Resources\Publishers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class PublisherForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name')
                    ->label('Nom')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(1),
                TextInput::make('website')
                    ->label('Site web')
                    ->url()
                    ->maxLength(255)
                    ->columnSpan(1),
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
