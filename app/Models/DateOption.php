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

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($event) {
            $date_id = $event->date_id;
            $date = Date::find($date_id);
            $date->status = 1;
            $date->save();
        });
    }
}