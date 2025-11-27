<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class EventSpeaker extends Pivot
{
    protected $fillable = [
        'speaker_id',
        'event_id',
    ];

    public function speaker()
    {
        return $this->belongsTo(Speaker::class);
    }

    public function event()
    {
        return $this->belongsTo(Event::class);
    }
}
