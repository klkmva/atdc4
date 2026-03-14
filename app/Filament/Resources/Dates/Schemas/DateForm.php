<?php

namespace App\Filament\Resources\Dates\Schemas;

use Filament\Forms\Components\DatePicker;
use Filament\Schemas\Schema;

class DateForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                DatePicker::make('date')
                    ->extraInputAttributes(['width' => '100px'])
                    ->label('Date')
                    ->required()
                    ->date()
                    ->autofocus(),
            ]);
    }
}
