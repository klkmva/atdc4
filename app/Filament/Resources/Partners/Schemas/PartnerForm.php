<?php

namespace App\Filament\Resources\Partners\Schemas;

use Dom\Text;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use Filament\Schemas\Components\Grid;

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
                        Grid::make([2])
                            ->schema(ContactForm::configure(new Schema())->getComponents())
                    ])
                    ->columnSpan(2),
            ]);
    }
}
