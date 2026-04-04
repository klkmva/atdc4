<?php

namespace App\Filament\Resources\MenuItem\Schemas;

use App\Filament\Forms\Components\TinyEditor;
use App\Models\MenuItem;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Tabs;
use Filament\Schemas\Components\Tabs\Tab;
use Filament\Schemas\Components\Utilities\Get;
use Filament\Schemas\Schema;

class MenuItemForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Tabs::make('tabs')
                    ->tabs([
                        Tab::make('Propriétés')
                            ->schema([
                                Select::make('type')
                                    ->label('Type d\'item')
                                    ->options(['page' => 'Page', 'menu' => 'Menu'])
                                    ->default('page')
                                    ->required(),
                                Select::make('parent_id')
                                    ->label('Menu parent')
                                    ->disabled(fn() => sizeof(MenuItem::where('type', 'menu')->get()) == 0)
                                    ->relationship(name: 'menuitem', titleAttribute: 'title', ignoreRecord: true),
                                Select::make('order')
                                    ->label('Ordre')
                                    ->options(function (Get $get, string $operation) {
                                        $count = MenuItem::where('parent_id', $get('parent_id'))->count();
                                        $result = $operation == 'create' ?
                                            ($count == 0 ? [0] : [0, $count]) : ($count == 1 ? [0] : [0, $count]);
                                        return $result;
                                    })
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
                            ])->columns(3),
                        Tab::make('Contenu')
                            ->schema([
                                TinyEditor::make('content')
                                    ->hiddenLabel()
                                    ->placeholder('Contenu de la page')
                                    ->resize(true)
                                    // ->profile('custom')
                                    ->disabled(fn(Get $get) => $get('type') == 'menu')
                                    // ->templates(route('page_templates'))
                                    ->columnSpanFull()
                                    ->required(),
                            ])->columns(1),
                    ])
            ])->columns(1);
    }
}
