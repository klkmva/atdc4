<?php

namespace App\Filament\Resources\Members\Tables;

use App\Filament\Exports\MemberExporter;
use Filament\Actions\EditAction;
use Filament\Actions\DeleteAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Tables\Filters\Filter;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Member;
use Filament\Actions\ImportAction;
use App\Filament\Imports\MemberImporter;
use Filament\Actions\ExportAction;

class MembersTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('first_name')
                    ->label('Prénom')
                    ->sortable(),
                TextColumn::make('last_name')
                    ->label('Nom')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('echeance')
                    ->label('Échéance')
                    ->date('d/m/Y')
                    ->sortable()
                    ->color(fn ($record) => $record->echeance < now() ? 'danger' : 'success'),
            ])
            ->filters([
                Filter::make('à jour')
                    ->query(fn ($query) => $query->where('echeance', '>=', now()))
                    ->toggle(),
            ])
            ->recordActions([
                DeleteAction::make()
                    ->icon('heroicon-o-trash')
                    ->iconButton()
                    ->requiresConfirmation(),
            ])
            ->toolbarActions([
                ExportAction::make()
                    ->exporter(MemberExporter::class)
                    ->color('primary'),
                ImportAction::make()
                    ->importer(MemberImporter::class)
                    ->color('primary'),
                Action::make('empty')
                    ->label('Vider la table')
                    ->color('danger')
                    ->requiresConfirmation()
                    ->modalHeading('Vider la table')
                    ->modalDescription('Ceci supprimera tous les enregistrements de la table. Cette action est irréversible.')
                    ->modalSubmitActionLabel('Oui, vider la table')
                    ->action(function () {
                        Member::query()->delete();
                    }),
            ])
            ->defaultSort('last_name', 'asc');
    }
}
