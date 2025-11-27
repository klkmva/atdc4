<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'title',
        'subtitle',
        'Location_id',
        'work_id',
        'info',
        'image',
        'published',
        'canceled',
    ];

    public function Work()
    {
        return $this->belongsTo(Work::class);
    }

    public function Location()
    {
        return $this->belongsTo(Location::class);
    }

    public function speakers(): BelongsToMany
    {
        return $this->belongsToMany(Speaker::class)->withPivot([])->using(EventSpeaker::class);
    }
    
    public function partners(): BelongsToMany
    {
        return $this->belongsToMany(Partner::class)->withPivot([])->using(EventPartner::class);
    }
}
