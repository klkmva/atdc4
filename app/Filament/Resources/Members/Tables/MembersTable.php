<?php

namespace App\Filament\Resources\Members\Tables;

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
                Action::make('pdf-member-list')
                    ->label('Exporter la liste')
                    ->icon(Heroicon::OutlinedDocumentArrowDown)
                    ->tooltip('Exporter la liste des membres actifs (seulement)')
                    ->action(function () {
                        $pdf = Pdf::loadView('filament.reports.members', [
                            'members' => Member::where('echeance', '>=', now())->get(),
                        ]);
                        Storage::put('public/members.pdf', $pdf->output());
                        return Storage::download(
                            'public/members.pdf',
                            'adherents.pdf',
                            [ 'Content-Type' => 'application/pdf', ]
                        );
                    }),
            ]);
    }
}
