<?php

namespace App\Filament\Resources\Actus;

use App\Filament\Resources\Actus\Pages\CreateActu;
use App\Filament\Resources\Actus\Pages\EditActu;
use App\Filament\Resources\Actus\Pages\ListActus;
use App\Filament\Resources\Actus\Schemas\ActuForm;
use App\Filament\Resources\Actus\Tables\ActusTable;
use App\Models\Actu;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;

class ActuResource extends Resource
{
    protected static ?string $model = Actu::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedRectangleStack;

    protected static ?string $recordTitleAttribute = 'Actualité';

    protected static ?string $breadcrumb = 'Actualité';

    protected static ?string $modelLabel = 'Actualité';

    public static function form(Schema $schema): Schema
    {
        return ActuForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return ActusTable::configure($table);
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
            'index' => ListActus::route('/'),
            'create' => CreateActu::route('/create'),
            'edit' => EditActu::route('/{record}/edit'),
        ];
    }
}
