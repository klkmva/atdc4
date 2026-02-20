<?php

namespace App\Filament\Resources\Publishers\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use Filament\Schemas\Components\Grid;

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
                        Grid::make([2])
                            ->schema(ContactForm::configure(new Schema())->getComponents())
                    ])
                    ->columnSpan(1),
            ]);
    }
}
