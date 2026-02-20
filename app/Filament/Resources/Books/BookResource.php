<?php

namespace App\Filament\Resources\Books;

use App\Filament\Resources\Books\Pages\CreateBook;
use App\Filament\Resources\Books\Pages\EditBook;
use App\Filament\Resources\Books\Pages\ListBooks;
use App\Filament\Resources\Books\Schemas\BookForm;
use App\Filament\Resources\Books\Tables\BooksTable;
use Illuminate\Database\Eloquent\Casts\Attribute;
use BackedEnum;
use Filament\Resources\Resource;
use Filament\Schemas\Schema;
use Filament\Tables\Table;
use App\Models\Book;

class BookResource extends Resource
{
    protected static ?string $model = Book::class;

    protected static string|BackedEnum|null $navigationIcon = 'phosphor-books-bold';

    protected static ?string $recordTitleAttribute = 'Ouvrage';

    protected static ?string $breadcrumb = 'Ouvrage';

    protected static ?string $modelLabel = 'Ouvrage';

    protected static ?int $navigationSort = 3;

    public static function form(Schema $schema): Schema
    {
        return BookForm::configure($schema);
    }

    public static function table(Table $table): Table
    {
        return BooksTable::configure($table);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    protected function subtitle(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    public static function getPages(): array
    {
        return [
            'index' => ListBooks::route('/'),
            'create' => CreateBook::route('/create'),
            'edit' => EditBook::route('/{record}/edit'),
        ];
    }
}
