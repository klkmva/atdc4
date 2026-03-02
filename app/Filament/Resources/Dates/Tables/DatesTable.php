<?php

namespace App\Filament\Resources\Dates\Tables;

use Dom\Text;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Filament\Tables\Columns\HtmlColumn;
use App\Filament\Tables\Columns\OptionsColumn;
use Filament\Tables\Filters\Filter;
use Illuminate\Database\Eloquent\Builder;

class DatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->label('Date')
                    ->date('D d M Y')
                    ->sortable()
                    ->width('20%'),
                IconColumn::make('status')
                    ->label('Status')
                    ->color(fn ($state) => $state === 0 ? 'success' : ($state === 1 ? 'warning' : 'danger'))
                    ->icon('heroicon-o-check-circle')
                    ->width('10%'),
                TextColumn::make('optcount')
                    ->label('Options')
                    ->badge(),
                OptionsColumn::make('opts')
                    ->label('Options')
            ])
            ->filters([
                Filter::make('Dates libres')
                    ->query(fn(Builder $query): Builder => $query->where('status', '<', 2)),
                Filter::make('Dates avec option(s)')
                    ->query(fn(Builder $query): Builder => $query->where('status', 1))
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
