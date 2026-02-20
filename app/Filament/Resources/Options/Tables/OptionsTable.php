<?php

namespace App\Filament\Resources\Options\Tables;

use Filament\Actions\DeleteAction;
use App\Filament\Tables\Columns\HtmlColumn;
use App\Filament\Tables\Columns\DatesColumn;
use Filament\Tables\Table;

class OptionsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                HtmlColumn::make('user.name')
                    ->verticallyAlignStart()
                    ->width('15%')
                    ->label('Posée par'),
                DatesColumn::make('dates')
                    ->verticallyAlignStart()
                    ->label('Dates')
                    ->width('10%'),
                HtmlColumn::make('book.title')
                    ->verticallyAlignStart()
                    ->width('30%')
                    ->label('Titre ouvrage'),
                HtmlColumn::make('comment')
                    ->placeholder('Aucun commentaire')
                    ->label('Commentaire'),
            ])
            ->recordActions([
                DeleteAction::make(),
            ])
            ->toolbarActions([
                //
            ]);
    }
}
