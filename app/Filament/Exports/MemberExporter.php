<?php

namespace App\Filament\Exports;

use App\Models\Member;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;
use Illuminate\Support\Number;

class MemberExporter extends Exporter
{
    protected static ?string $model = Member::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('first_name')
                ->label('Prénom'),
            ExportColumn::make('last_name')
                ->label('Nom'),
            ExportColumn::make('email')
                ->label('Email'),
            ExportColumn::make('date')
                ->label('Date d\'adhésion'),
            ExportColumn::make('echeance')
                ->label('Échéance'),
            ExportColumn::make('address')
                ->label('Adresse'),
            ExportColumn::make('code')
                ->label('Code postal'),
            ExportColumn::make('city')
                ->label('Commune'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'La table a été créée et' . Number::format($export->successful_rows) . ' ' . str('ligne')->plural($export->successful_rows) . ' exportée.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' ' . str('ligne')->plural($failedRowsCount) . ' échec de l\'exportation.';
        }

        return $body;
    }
}
