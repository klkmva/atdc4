<?php

namespace App\Filament\Resources\MenuItem\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class MenuItemTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('type')
                    ->label('Type'),
                TextColumn::make('parent.title')
                    ->label('Menu parent'),
                TextColumn::make('order')
                    ->label('Ordre'),
                TextColumn::make('title')
                    ->label('Libellé'),
                TextColumn::make('url')
                    ->label('Url'),
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
