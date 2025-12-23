<?php

namespace App\Filament\Resources\Events\Schemas;

use App\Models\Book;
use Filament\Forms\Components\Checkbox;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\FieldSet;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Components\Utilities\Get;
use App\Filament\Forms\Components\ImageInput;
use Dom\Text;
use Laravel\Pail\File;

class EventForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                Section::make()
                    ->columns(2)
                    ->schema([
                        DatePicker::make('date')
                            ->hiddenLabel()
                            ->default(\now())
                            ->closeOnDateSelection(true),
                        TimePicker::make('time')
                            ->hiddenLabel()
                            ->default('19:00')
                            ->closeOnDateSelection(true)
                            ->seconds(false),
                    ])
                    ->columnSpan(2),
                Section::make()
                    ->schema([
                        Select::make('location_id')
                            ->hiddenLabel()
                            ->relationship('location', 'name')
                            ->placeholder('Sélectionner un lieu'),
                    ])->columnSpan(2),

                Section::make()
                    ->schema([
                        TextInput::make('title')
                            ->label('Titre')
                            ->placeholder('Titre de l\'événement'),
                        TextInput::make('subtitle')
                            ->label('Sous-titre')
                            ->placeholder('Sous-titre de l\'événement'),
                    ])->columnSpan(4),

                RichEditor::make('info')
                    ->label('Description')
                    ->placeholder('Desciption de l\'événement...')
                    ->columnSpan(4),

                Select::make('speakers')
                    ->label('Intervenants')
                    ->multiple()
                    ->relationship('speakers', 'full_name')
                    ->searchable(['first_name', 'last_name'])
                    ->searchingMessage('Recherche des intervenants...')
                    ->preload()
                    ->createOptionForm([
                        Section::make()
                            ->description('Nom et prénom')
                            ->schema([
                                TextInput::make('first_name')
                                    ->hiddenLabel()
                                    ->placeholder('Prénom')
                                    ->columnSpan(1),
                                TextInput::make('last_name')
                                    ->hiddenLabel()
                                    ->placeholder('Nom')
                                    ->columnSpan(1),
                            ])->columns(2)->columnSpan(2),
                        FileUpload::make('image')
                            ->label('Photo')
                            ->image()
                            ->placeholder('Télécharger une photo')
                            ->avatar()
                            ->columnSpan(1)
                            ->extraFieldWrapperAttributes(['style' => 'justify-items: center;']),
                        RichEditor::make('info')
                            ->label('Biographie')
                            ->placeholder('Biographie du conférencier...')
                            ->columnSpanfull()
                            ->toolbarButtons([
                                ['undo', 'redo'],
                                ['bold', 'italic', 'underline'],
                                ['bulletList', 'orderedList'],
                                ['superscript', 'subscript'],
                                'link',
                            ])
                            ->extraInputAttributes(['style' => 'min-height: 10vh; max-height: 20vh; overflow-y: auto;']),
                        Select::make('contact_id')
                            ->label('Contact')
                            ->relationship('contact', 'full_name')
                            ->placeholder('Sélectionner un contact')
                            ->columnSpan(1),
                        ])
                    ->columnSpan(2),
                
                Select::make('partners')
                    ->label('Partenaires')
                    ->multiple()
                    ->relationship('partners', 'name')
                    ->searchable('name')
                    ->searchingMessage('Recherche un partenaire...')
                    ->preload()
                    ->createOptionForm([
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
                        ])
                    ->columnSpan(2),

                FieldSet::make('Statut de l\'événement')
                    ->columns(2)
                    ->schema([
                        Checkbox::make('published')
                            ->label('Publié'),
                        Checkbox::make('canceled')
                            ->label('Annulé'),
                    ])->columnSpan(1),

                Select::make('book_id')
                    ->label('Ouvrage associé')
                    ->relationship('book', 'title')
                    ->placeholder('Sélectionner un ouvrage')
                    ->searchable('title')
                    ->searchingMessage('Recherche un ouvrage...')
                    ->preload()
                    ->reactive()
                    ->afterStateUpdated(function (string|null $state, Get $get, Set $set) {
                        if (!$state) return;
                        $book = Book::where('id', $state)->first();
                        if($book) {
                            if (!filled($get('title'))) {
                                $set('title', $book->title);
                                $set('subtitle', $book->subtitle);
                                $set('info', $book->summary);
                            }
                        }
                    })
                    ->createOptionForm([
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
                    ->columnSpan(2),

                // TextInput::make('image_'),
                   
                ImageInput::make('image')
                    ->label('Image de l\'événement')
                    ->size('100px')
                    ->imgPath('/storage/public/events/')
                    ->live()
                    ->reactive()
                    ->columnSpan(1),
            ]);
    }
}
