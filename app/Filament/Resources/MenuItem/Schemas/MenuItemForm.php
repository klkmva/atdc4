<?php

namespace App\Filament\Resources\MenuItem\Schemas;

use App\Models\MenuItem;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Select::make('type')
                    ->options(['page' => 'Page', 'menu' => 'Menu'])
                    ->default('page')
                    ->required()
                    ->label('Type d\'item'),
                Select::make('parent_id')
                    ->label('Menu parent')
                    ->disabled(fn () => sizeof(MenuItem::where('type', 'menu')->get()) == 0 )
                    ->relationship(name: 'menuitem', titleAttribute: 'title', ignoreRecord: true),
                TextInput::make('order')
                    ->extraInputAttributes(['type' => 'number', 'min' => 0, 'max' => 10, 'step' => 1])
                    ->label('Ordre')
                    ->default(0)
                    ->required(),
                TextInput::make('url')
                    ->label('Url')
                    ->regex('/\w{1,15}/')
                    ->required()
                    ->columnSpan(1),
                TextInput::make('title')
                    ->label('Libellé')
                    ->required()
                    ->string()
                    ->maxLength(25)
                    ->columnSpan(2),
                RichEditor::make('content')
                    ->hiddenLabel()
                    ->placeholder('Contenu de la page')
                    ->disabled(fn (Get $get) => $get('type') == 'menu')
                    ->columnSpanFull(),
            ])
            ->columns(3);
    }
}
