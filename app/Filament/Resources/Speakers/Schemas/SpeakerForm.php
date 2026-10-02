<?php

namespace App\Filament\Resources\Speakers\Schemas;

use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use App\Filament\Forms\Components\ImageInput;
use Filament\Actions\Action;
use App\Filament\Resources\Contacts\Schemas\ContactForm;
use Filament\Schemas\Components\Grid;

class SpeakerForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(4)
            ->components([
                Section::make()
                    ->description('Identité')
                    ->columns(2)
                    ->schema([
                        TextInput::make('first_name')
                            ->hiddenLabel()
                            ->placeholder('Prénom')
                            ->columnSpan(1),
                        TextInput::make('last_name')
                            ->hiddenLabel()
                            ->placeholder('Nom')
                            ->columnSpan(1),
                    ])
                    ->columnSpan(3),
                ImageInput::make('image')
                    ->hiddenLabel()
                    ->size('150px')
                    ->live()
                    ->columnSpan(1)
                    ->extraFieldWrapperAttributes(['style', 'justify-content:center;']),
                RichEditor::make('info')
                    ->label('Biographie')
                    ->placeholder('Informations biographiques')
                    ->columnSpanfull()
                    ->toolbarButtons([
                        ['undo', 'redo'],
                        ['bold', 'italic','underline'],
                        ['bulletList', 'orderedList'],
                        ['superscript', 'subscript'],
                        'link',
                    ])
                    ->extraInputAttributes(['style' => 'min-height: 10vh; max-height: 20vh; overflow-y: auto;']),
                // Select::make('contact_id')
                //     ->label('Contact')
                //     ->relationship('contact', 'full_name')
                //     ->placeholder('Sélectionner un contact')
                //     ->searchable()
                //     ->getSearchResultsUsing(fn(string $search): array => Contact::query()
                //         ->where('full_name', 'like', "%{$search}%")
                //         ->limit(50)
                //         ->pluck('full_name', 'id')
                //         ->all())
                //     ->searchingMessage('Recherche un contact...')
                //     ->preload()
                //     ->reactive()
                //     ->createOptionForm([
                //         Grid::make([2])
                //             ->schema(ContactForm::configure(new Schema())->getComponents())
                //     ])
                //     ->columnSpan(2),
            ]);
    }
}
