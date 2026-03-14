<?php

namespace App\Filament\Forms\Components\RichEditor\RichContentCustomBlocks;

use Filament\Actions\Action;
use Filament\Forms\Components\RichEditor\RichContentCustomBlock;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Get;

class CustomTable extends RichContentCustomBlock
{
    public static function getId(): string
    {
        return 'custom_table';
    }

    public static function getLabel(): string
    {
        return 'Tableau';
    }

    public static function configureEditorAction(Action $action): Action
    {
        return $action
            ->modalDescription('Configuration du tableau')
            ->schema([
                Section::make('table')
                    ->label('Tableau')
                    ->columns(3)
                    ->columnSpanFull()
                    ->schema([
                        TextInput::make('tcols')
                            ->label('Colonnes')
                            ->numeric()
                            ->min(1)
                            ->max(10)
                            ->min(1)
                            ->default(3),
                        TextInput::make('trows')
                            ->label('Lignes')
                            ->numeric()
                            ->default(3),
                        TextInput::make('hrows')
                            ->label('Lignes entête')
                            ->numeric()
                            ->min(1)
                            ->max(3)
                            ->default(1),
                    ]),
                        Section::make('columns')
                            ->label('Colonnes')
                            ->columns(10)
                            ->columnSpanFull()
                            ->schema([
                            TextInput::make('col1')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 1),
                            TextInput::make('col2')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 2),
                            TextInput::make('col3')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 3),
                            TextInput::make('col4')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 4),
                            TextInput::make('col5')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 5),
                            TextInput::make('col6')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 6),
                            TextInput::make('col7')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 7),
                            TextInput::make('col8')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 8),
                            TextInput::make('col9')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 9),
                            TextInput::make('col10')
                                ->hiddenLabel()
                                ->numeric()
                                ->min(5)
                                ->max(95)
                                ->hidden(fn(Get $get) => $get('tcols') < 10),
                    ])
            ]);
    }

    public static function toPreviewHtml(array $config): string
    {
        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.custom-table.preview', [
            'config' => $config,
        ])->render();
    }

    public static function toHtml(array $config, array $data): string
    {
        return view('filament.forms.components.rich-editor.rich-content-custom-blocks.custom-table.index', [
            'config' => $config,
            'data' => $data,
        ])->render();
    }
}
