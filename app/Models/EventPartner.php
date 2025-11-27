<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventPartner extends Pivot
{
    protected $fillable = [
        'partner_id',
        'event_id',
    ];

    public function partner()
    {
        return $this->belongsTo(Partner::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
