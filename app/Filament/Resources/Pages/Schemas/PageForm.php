<?php

namespace App\Filament\Resources\Pages\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\RichEditor;
use Filament\Schemas\Schema;

class PageForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(2)
            ->components([
                TextInput::make('title')
                    ->label('Titre')
                    ->placeholder('Titre de la page'),
                TextInput::make('menu')
                    ->label('Menu')
                    ->placeholder('Nom du menu'),
                RichEditor::make('content')
                    ->label('Contenu')
                    ->placeholder('Contenu de la page')
                    ->columnSpan(2)
                    ->toolbarButtons([
                        ['undo', 'redo'],
                        ['bold', 'italic', 'underline', 'subscript', 'superscript', 'link'],
                        ['h1', 'h2', 'h3', 'alignStart', 'alignCenter', 'alignEnd', 'alignJustify'],
                        ['blockquote', 'codeBlock', 'bulletList', 'orderedList', 'horizontalRule'],
                        ['table', 'attachFiles'], // The `customBlocks` and `mergeTags` tools are also added here if those features are used.,
                    ])
                    ->floatingToolbars([
                        'table' => [
                            'tableAddColumnBefore',
                            'tableAddColumnAfter',
                            'tableDeleteColumn',
                            'tableAddRowBefore',
                            'tableAddRowAfter',
                            'tableDeleteRow',
                            'tableMergeCells',
                            'tableSplitCell',
                            'tableToggleHeaderRow',
                            'tableToggleHeaderCell',
                            'tableDelete',
                        ],
                    ]),

            ]);
    }
}
