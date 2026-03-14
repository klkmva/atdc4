<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class DateOption extends Pivot
{
    protected $fillable = [
        'date_id',
        'option_id',
    ];

    public function date()
    {
        return $this->belongsTo(Date::class);
    }
    
    public function option()
    {
        return $this->belongsTo(Option::class);
    }
}