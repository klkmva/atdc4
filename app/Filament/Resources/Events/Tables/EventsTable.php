<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shortdate')
                    ->label('Date')
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('date', $direction);
                    }),
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
