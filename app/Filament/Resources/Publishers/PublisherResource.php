<?php

namespace App\Filament\Resources\Publishers;

use App\Filament\Resources\Publishers\Pages\CreatePublisher;
use App\Filament\Resources\Publishers\Pages\EditPublisher;
use App\Filament\Resources\Publishers\Pages\ListPublishers;
use App\Filament\Resources\Publishers\Schemas\PublisherForm;
use App\Filament\Resources\Publishers\Tables\PublishersTable;
use App\Models\Publisher;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use UnitEnum;

class PublisherResource extends Resource
{
    protected static ?string $model = Publisher::class;

    protected static string|BackedEnum|null $navigationIcon = 'phosphor-printer-light';

    protected static ?string $recordTitleAttribute = 'Éditeur';

    protected static ?string $breadcrumb = 'Éditeur';

    protected static ?string $modelLabel = 'Éditeur';

    protected static string | UnitEnum | null $navigationGroup = 'Références';

    protected static ?int $navigationSort = 4;

    public static function form(Schema $schema): Schema
    {
        return PublisherForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return PublishersTable::configure($table);
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
            'index' => ListPublishers::route('/'),
            'create' => CreatePublisher::route('/create'),
            'edit' => EditPublisher::route('/{record}/edit'),
        ];
    }
}
