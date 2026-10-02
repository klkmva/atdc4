<?php

namespace App\Filament\Resources\Events\Tables;

use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\Filter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Tables\Columns\CopyUrlAnnonce;

class EventsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('shortdate')
                    ->label('Date')
                    ->width('10rem')
                    ->sortable(query: function (Builder $query, string $direction): Builder {
                        return $query
                            ->orderBy('date', $direction);
                    }),
                TextColumn::make('title')
                    ->label('Titre')
                    ->searchable(),
                CopyUrlAnnonce::make('annonce')
                    ->label('')
                    ->width('3rem'),
            ])
            ->filters([
                Filter::make('à venir')
                    ->query(fn($query) => $query->where('date', '>=', today())),
                Filter::make('passées')
                    ->query(fn($query) => $query->where('date', '<', today())),
            ])
            ->recordActions([
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->iconButton()
                    ->requiresConfirmation(),
            ])
            ->toolbarActions([
                //
            ])
            ->defaultSort('date', 'desc');
    }
}
