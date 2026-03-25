<?php

namespace App\Filament\Resources\Dates;

use App\Filament\Resources\Dates\Pages\CreateDate;
use App\Filament\Resources\Dates\Pages\EditDate;
use App\Filament\Resources\Dates\Pages\ListDates;
use App\Filament\Resources\Dates\Schemas\DateForm;
use App\Filament\Resources\Dates\Tables\DatesTable;
use BackedEnum;
use App\Models\Date;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Support\Icons\Heroicon;
use Filament\Tables\Table;
use UnitEnum;

class DateResource extends Resource
{
    protected static ?string $model = Date::class;

    protected static string|BackedEnum|null $navigationIcon = Heroicon::OutlinedCalendarDays;

    protected static ?string $recordTitleAttribute = 'Date';

    protected static ?int $navigationSort = 1;

    protected static string | UnitEnum | null $navigationGroup = 'Planning';
    
    public static function form(Schema $schema): Schema
    {
        return DateForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return DatesTable::configure($table);
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
            'index' => ListDates::route('/'),
            'create' => CreateDate::route('/create'),
            'edit' => EditDate::route('/{record}/edit'),
        ];
    }
}
