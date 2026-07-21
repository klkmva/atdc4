<?php

namespace App\Filament\Resources\MenuItem;

use App\Filament\Resources\MenuItem\Pages\CreateMenuItem;
use App\Filament\Resources\MenuItem\Pages\EditMenuItem;
use App\Filament\Resources\MenuItem\Pages\ListMenuItem;
use App\Filament\Resources\MenuItem\Schemas\MenuItemForm;
use App\Filament\Resources\MenuItem\Tables\MenuItemTable;
use App\Models\MenuItem;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class MenuItemResource extends Resource
{
    protected static ?string $model = MenuItem::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedDocumentText;

    protected static ?string $recordTitleAttribute = 'Menu / Page';

    protected static ?string $navigationLabel = 'Menus/Pages';

    protected static string | UnitEnum | null $navigationGroup = 'Site';

    protected static ?int $navigationSort = 1;

    public static function form(Schema $schema): Schema
    {
        return MenuItemForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return MenuItemTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => ListMenuItem::route('/'),
            'create' => CreateMenuItem::route('/create'),
            'edit' => EditMenuItem::route('/{record}/edit'),
        ];
    }
}
