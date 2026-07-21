<?php

namespace App\Filament\Resources\Users\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class UsersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Prénom'),
                TextColumn::make('last_name')
                    ->label('Nom'),
                TextColumn::make('email')
                    ->label('Email'),
            ])
            ->filters([
                //
            ])
            ->recordActions([
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->iconButton()
                    ->requiresConfirmation()
                    ->hidden(fn ($record) => $record->is_admin),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
