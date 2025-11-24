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
                    ])->columnSpan(2),
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
                    ->relationship('speakers', 'name')
                    ->columnSpan(4),

                FieldSet::make('Statut de l\'événement')
                    ->columns(2)
                    ->schema([
                        Checkbox::make('published')
                            ->label('Publié ?'),
                        Checkbox::make('canceled')
                            ->label('Annulé ?'),
                    ])->columnSpan(2),

                FileUpload::make('image')
                    ->label('Image de l\'événement')
                    ->directory('events/images')
                    ->columnSpan(2),
                ]);
    }
}
