<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('title')
                    ->label('Titre')
                    ->required()
                    ->maxLength(255)
                    ->columnSpan(2),
                TextInput::make('subtitle')
                    ->label('Sous-titre')
                    ->maxLength(255)
                    ->columnSpan(2),
                TextInput::make('authors')
                    ->label('Auteurs')
                    ->maxLength(255)
                    ->columnSpan(2),
                DatePicker::make('publication_date')
                    ->label('Date de publication')
                    ->default(\now())
                    ->closeOnDateSelection(true)
                    ->columnSpan(1),
                TextInput::make('link')
                    ->label('Lien')
                    ->maxLength(255)
                    ->columnSpan(1),
                FileUpload::make('image')
                    ->label('Image')
                    ->placeholder('Télécharger une image')
                    ->columnSpan(2),
                Select::make('publisher_id')
                    ->label('Éditeur')
                    ->relationship('publisher', 'name')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
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
                    ])
                    ->columnSpan(2),
                RichEditor::make('summary')
                    ->label('Résumé')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        ['undo', 'redo'],
                        ['bold', 'italic', 'underline'],
                        ['bulletList', 'orderedList'],
                        ['superscript', 'subscript'],
                        'link',
                    ])
                    ->extraInputAttributes(['style' => 'min-height: 10vh; max-height: 20vh; overflow-y: auto;']),
            ])
            ->columns(4);
    }
}
