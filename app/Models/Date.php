<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Casts\Attribute;
use App\Models\DateOption;

class Date extends Model
{
    protected $fillable = [
        'date',
        'created_at',
        'updated_at',
    ];

    public function options(): BelongsToMany
    {
        return $this->belongsToMany(Option::class)->withPivot([])->using(DateOption::class);
    }

    protected function optcount(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $this->options()->count()
        );
    }

    protected function shortdate(): Attribute
    {
        return Attribute::make(
            get: fn() => ucFirst(Carbon::parse($this->date)->locale('fr_FR')->isoFormat('ddd Do MMM YYYY'))
        );
    }
}
