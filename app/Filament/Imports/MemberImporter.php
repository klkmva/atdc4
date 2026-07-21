<?php

namespace App\Filament\Imports;

use App\Models\Member;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Number;

class MemberImporter extends Importer
{
    protected static ?string $model = Member::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('first_name')
                ->rules(['max:127']),
            ImportColumn::make('last_name')
                ->requiredMapping()
                ->rules(['required', 'max:255']),
            ImportColumn::make('email')
                ->rules(['email', 'max:45']),
            ImportColumn::make('address')
                ->rules(['max:127']),
            ImportColumn::make('code')
                ->rules(['max:5']),
            ImportColumn::make('city')
                ->rules(['max:127']),
            ImportColumn::make('date')
                ->requiredMapping()
                ->rules(['required', 'date']),
        ];
    }

    public function resolveRecord(): Member
    {
        return new Member();
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Importation terminée. ' . Number::format($import->successful_rows) . ' membre(s) importé(s).';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . Number::format($failedRowsCount) . ' enregistrement(s) non importé(s)';
        }

        return $body;
    }
}
