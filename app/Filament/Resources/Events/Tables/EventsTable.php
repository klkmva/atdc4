<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->label('Date')
                    ->date('d/m/Y')
                    ->sortable(),
                TextColumn::make('title')
                    ->label('Titre')
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
