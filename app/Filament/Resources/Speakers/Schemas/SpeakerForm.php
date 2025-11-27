<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
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
                        ['bold', 'italic','underline'],
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
            ]);
    }
}
