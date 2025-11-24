<?php

namespace App\Filament\Resources\Actus\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;

class ActuForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->label('Date de validité de l\'actualité')
                    ->default(\now())
                    ->closeOnDateSelection(true),
                FileUpload::make('image')
                    ->label('Image de l\'actualité')
                    ->directory('actus/images'),
                TextInput::make('title')
                    ->label('Titre de l\'actualité')
                    ->placeholder('Titre de l\'actualité')
                    ->required()
                    ->columnSpanFull(),
                RichEditor::make('info')
                    ->label('Contenu de l\'actualité')
                    ->placeholder('Contenu de l\'actualité...')
                    ->columnSpanFull()
                    ->toolbarButtons([
                        ['undo', 'redo'],
                        ['bold', 'italic', 'underline', 'subscript', 'superscript'],
                        ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'],
                        ['bulletList', 'orderedList'],
                        ['link'],
                    ])
                    ->columnSpanFull(),
            ])
            ->columns(2);
    }
}
