<?php

namespace App\Filament\Resources\Works\Tables;

use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class WorksTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('title')
                    ->label('Titre')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('authors')
                    ->label('Auteurs')
                    ->sortable()
                    ->searchable(),
                TextColumn::make('publication_date')
                    ->label('Date de publication')
                    ->date()
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
                EditAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
