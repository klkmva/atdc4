<?php

namespace App\Filament\Resources\Dates\Tables;

use Dom\Text;
use Filament\Actions\DeleteAction;
use Filament\Tables\Columns\IconColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use App\Filament\Tables\Columns\HtmlColumn;
use App\Filament\Tables\Columns\OptionsColumn;

class DatesTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('date')
                    ->label('Date')
                    ->date('d M Y')
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
                    ->label('Valider une option')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
