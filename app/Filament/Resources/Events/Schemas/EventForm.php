<?php

namespace App\Filament\Resources\Events\Schemas;

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
                    ->description('Date et heure de l\'événement')
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
                    ->description('Lieu de l\'événement')
                    ->schema([
                        Select::make('location_id')
                            ->hiddenLabel()
                            ->relationship('location', 'name')
                            ->placeholder('Sélectionner un lieu'),
                    ])->columnSpan(2),

                Section::make()
                    ->description('Titre de l\'événement')
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
                            ->directory('images/speakers')
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

                Select::make('work_id')
                    ->label('Ouvrage associé')
                    ->relationship('work', 'title')
                    ->placeholder('Sélectionner un ouvrage')
                    ->columnSpan(2),

                FileUpload::make('image')
                    ->label('Image de l\'événement')
                    ->directory('events/images')
                    ->columnSpan(1),
                ]);
    }
}
