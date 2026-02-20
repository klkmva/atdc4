<?php

namespace App\Filament\Resources\Members\Schemas;

use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use \Filament\Forms\Components\TextInput;
use \Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Textarea;

class MemberForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Identité')
                    ->columns(2)
                    ->schema([
                        TextInput::make('first_name')
                            ->label('Prénom')
                            ->maxLength(255)
                            ->nullable(),
                        TextInput::make('last_name')
                            ->label('Nom de famille')
                            ->required()
                            ->maxLength(255),
                        ])
                    ->columnSpan(2),
                TextInput::make('email')
                    ->label('Email')
                    ->email()
                    ->maxLength(45)
                    ->nullable(),
                DatePicker::make('date')
                    ->label('Date d\'adhésion')
                    ->required(),
                Section::make('Adresse')
                    ->columns(3)
                    ->schema([
                        Textarea::make('address')
                            ->label('Adresse')
                            ->columnSpanFull(),
                        TextInput::make('code')
                            ->label('Code postal')
                            ->columnSpan(1),
                        TextInput::make('city')
                            ->label('Commune')
                            ->columnSpan(2),
                    ])->columnSpanFull(),
            ]);
    }
}
