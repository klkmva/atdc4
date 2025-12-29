<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use App\Filament\Forms\Components\ImageInput;
use Filament\Actions\Action;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
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
                    ])->columns(2)->columnSpan(3),
                Section::make('Photo')
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
                                ->hidden(fn($record) => !$record || !$record->image),
                        ]
                    )
                    ->schema([
                        ImageInput::make('image')
                            ->hiddenLabel()
                            ->size('50px')
                            ->live()
                            ->reactive()
                            ->extraFieldWrapperAttributes(['style' => 'justify-items: center;']),
                    ])->columnSpan(1),
                    
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
                    ->columnSpan(2),
            ]);
    }
}
