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
                TextColumn::make('optcount')
                    ->label('Options')
                    ->badge()
                    ->color(fn ($state) => $state == 0 ? 'success' : 'warning' ),
                OptionsColumn::make('opts')
                    ->label('Options')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ])
            ->defaultSort('date', 'asc');
    }
}
