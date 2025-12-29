<?php

namespace App\Filament\Resources\Books\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use App\Filament\Forms\Components\ImageInput;
use Filament\Actions\Action;

class BookForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->columns(1)
                    ->schema([
                        TextInput::make('title')
                            ->label('Titre')
                            ->required()
                            ->maxLength(255),
                        TextInput::make('subtitle')
                            ->label('Sous-titre')
                            ->maxLength(255),
                        TextInput::make('authors')
                            ->label('Auteurs')
                            ->maxLength(255)
                    ])->columnSpan(3),
                Section::make('Image')
                    ->columns(1)
                    ->afterHeader(
                        [
                            Action::make('removeImage')
                                ->label('')
                                ->color('danger')
                                ->icon('heroicon-o-trash')
                                ->action(function ($record, $form) {
                                    $record->image = null;
                                    $record->save();
                                    $form->fill([
                                        'image' => null,
                                    ]);
                                })
                                ->hidden(fn ($record) => !$record || !$record->image),
                        ]
                    )
                    ->schema([
                    ImageInput::make('image')
                        ->hiddenLabel()
                        ->size('180px')
                        ->live()
                        ->reactive()
                    ])->columnSpan(1),
                DatePicker::make('publication_date')
                    ->label('Date de publication')
                    ->default(\now())
                    ->closeOnDateSelection(true)
                    ->columnSpan(1),
                TextInput::make('link')
                    ->label('Lien')
                    ->maxLength(255)
                    ->columnSpan(1),
                Select::make('publisher_id')
                    ->label('Éditeur')
                    ->relationship('publisher', 'name')
                    ->placeholder('')
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
                    ->columnSpan(1),
                TextInput::make('isbn')
                    ->label('ISBN')
                    ->maxLength(20)
                    ->columnSpan(1),
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
