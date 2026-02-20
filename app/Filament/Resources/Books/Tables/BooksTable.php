<?php

namespace App\Filament\Resources\Books\Tables;

use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class BooksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Titre')
                    ->description(fn ($record) => html_entity_decode($record->subtitle))
                    ->sortable()
                    ->searchable(),
                TextColumn::make('authors')
                    ->label('Auteurs')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('publication_date')
                    ->label('Date de publication')
                    ->date('M Y')
                    ->sortable(),
                TextColumn::make('publisher.name')
                    ->label('Éditeur')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->iconButton()
                    ->requiresConfirmation(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
