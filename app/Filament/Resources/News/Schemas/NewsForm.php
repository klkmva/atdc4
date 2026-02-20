<?php

namespace App\Filament\Resources\News\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use App\Filament\Forms\Components\ImageInput;
use Filament\Actions\Action;
use Filament\Forms\Components\TimePicker;

class NewsForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make()
                    ->schema([
                        DatePicker::make('date')
                            ->label('Date de validité')
                            ->default(\now())
                            ->closeOnDateSelection(true)
                            ->required()
                            ->columnSpan(1),
                        TimePicker::make('time')
                            ->label('heure')
                            ->columnSpan(1)
                            ->seconds(false),
                        TextInput::make('title')
                            ->label('Titre de l\'actualité')
                            ->placeholder('Titre de l\'actualité')
                            ->required()
                            ->columnSpan(4),
                        RichEditor::make('info')
                            ->label('Contenu de l\'actualité')
                            ->placeholder('Contenu de l\'actualité...')
                            ->columnSpanFull()
                            ->toolbarButtons([
                                ['undo', 'redo'],
                                ['h1', 'h2', 'textColor', 'clearFormatting', 'alignStart', 'alignCenter', 'alignEnd'],
                                ['bold', 'italic', 'underline', 'subscript', 'superscript'],
                                ['alignStart', 'alignCenter', 'alignEnd', 'alignJustify'],
                                ['bulletList', 'orderedList'],
                                ['link'],
                            ])
                            ->columnSpanFull(),
                    ])
                    ->columns(6)
                    ->columnSpan(4),
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
                                ->hidden(fn($record) => !$record || !$record->image),
                        ]
                    )
                    ->schema([
                        ImageInput::make('image')
                            ->hiddenLabel()
                            ->size('100px')
                            ->live()
                            ->reactive()
                    ])->columnSpan(1),
            ])
            ->columns(5);
    }
}
