<?php

namespace App\Filament\Resources\Partners\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Filament\Actions\EditAction;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Schemas\Components\Icon;

class PartnersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('name')
                    ->label('Nom du partenaire')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('short_name')
                    ->label('Nom court')
            ])
            ->filters([
                //
            ])
            ->recordActions([
                EditAction::make()
                    ->hiddenLabel()
                    ->tooltip('Modifier le partenaire'),
                DeleteAction::make()
                    ->requiresConfirmation()
                    ->hiddenLabel()
                    ->tooltip('Supprimer le partenaire'),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
