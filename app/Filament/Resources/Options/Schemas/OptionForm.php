<?php

namespace App\Filament\Resources\Options\Schemas;

use Filament\Actions\Action;
use Filament\Schemas\Schema;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use App\Filament\Forms\Components\ImageInput;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Schemas\Components\Section;
use App\Filament\Clusters\Books\Resources\Books\Schemas\BookForm;
use Filament\Schemas\Components\Grid;
use Filament\Support\Enums\Width;
use Illuminate\Database\Eloquent\Builder;

class OptionForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('user_id')
                    ->hidden(),
                Select::make('book_id')
                    ->label('Ouvrage associé')
                    ->relationship('book', 'title')
                    ->columnSpan(2)
                    ->placeholder('Sélectionner un ouvrage')
                    ->searchable('title')
                    ->searchingMessage('Recherche un ouvrage...')
                    ->preload()
                    ->reactive()
                    ->createOptionForm([
                        Grid::make([4])
                            ->schema(BookForm::configure(new Schema(), true)->getComponents())
                    ]),
                Select::make('dates')
                    ->label('Dates envisagées')
                    ->multiple()
                    ->relationship(
                            titleAttribute: 'date')
                    ->preload()
                    ->columnSpan(2),
                RichEditor::make('comment')
                    ->label('Commentaire')
                    ->nullable()
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
