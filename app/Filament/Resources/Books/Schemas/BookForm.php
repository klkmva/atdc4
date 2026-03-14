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
use App\Filament\Resources\Publishers\Schemas\PublisherForm;
use Filament\Schemas\Components\Grid;

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
                            ->required(),
                        TextInput::make('subtitle')
                            ->label('Sous-titre'),
                        TextInput::make('authors')
                            ->label('Auteurs')
                    ])
                    ->columnSpan(3),
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
                            ->afterStateHydrated(
                                function (ImageInput $component, string $operation, string | null $state) {
                                    $component->state($operation == 'create' ? '' : $state);
                                })
                    ])
                    ->columnSpan(1),
                DatePicker::make('publication_date')
                    ->label('Date de publication')
                    ->default(\now())
                    ->closeOnDateSelection(true)
                    ->columnSpan(1),
                TextInput::make('link')
                    ->label('Lien')
                    ->columnSpan(1),
                Select::make('publisher_id')
                    ->label('Éditeur')
                    ->relationship('publisher', 'name')
                    ->placeholder('')
                    ->searchable()
                    ->preload()
                    ->createOptionForm([
                        Grid::make([2])
                            ->schema(PublisherForm::configure(new Schema())->getComponents())
                    ])
                    ->columnSpan(1),
                TextInput::make('isbn')
                    ->label('ISBN')
                    ->maxLength(20)
                    ->columnSpan(1),
                RichEditor::make('summary')
                    ->label('Résumé')
                    ->toolbarButtons([
                        ['undo', 'redo'],
                        ['bold', 'italic', 'underline'],
                        ['bulletList', 'orderedList'],
                        ['superscript', 'subscript'],
                        'link',
                    ])
                    ->extraInputAttributes(['style' => 'min-height: 10vh; max-height: 20vh; overflow-y: auto;'])
                    ->columnSpanFull(),
            ])
            ->columns(4);
    }
}
