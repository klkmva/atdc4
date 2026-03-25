<?php

namespace App\Filament\Resources\Contacts\Tables;

use Filament\Actions\DeleteAction;
use Filament\Actions\EditAction;
use Filament\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Support\Icons\Heroicon;
use Illuminate\Support\Facades\Storage;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Contact;

class ContactsTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('full_name')
                    ->state(fn(Contact $record): string => "{$record->first_name} {$record->last_name}")
                    ->label('Nom complet')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('email')
                    ->label('Email'),
                TextColumn::make('phone1')
                    ->label('Téléphone'),
                TextColumn::make('company')
                    ->label('Structure')
                    ->sortable(),
            ])
            ->filters([
                //
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
                ->tooltip('Exporter la liste des contacts')
                ->action(function () {
                    $pdf = Pdf::loadView('filament.reports.contacts', [
                        'contacts' => Contact::query()->orderBy('last_name')->get(),
                    ]);
                    Storage::put('public/contacts.pdf', $pdf->output());
                    return Storage::download(
                        'public/contacts.pdf',
                        'adherents.pdf',
                        ['Content-Type' => 'application/pdf',]
                    );
                }),
            ])
            ->defaultSort('last_name', 'asc');
    }
}
