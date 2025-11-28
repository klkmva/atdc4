<?php

namespace App\Filament\Resources\Contacts\Schemas;

use Dom\Text;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class ContactForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
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
            ]);
    }
}
