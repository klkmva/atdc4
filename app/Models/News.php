<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

class News extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'title',
        'info',
        'image',
    ];

    protected function longDate(): Attribute
    {
        return Attribute::make(
            get: fn($value) => ucFirst(Carbon::parse($value)->locale('fr_FR')->isoFormat('dddd Do MMMM YYYY'))
        );
    }
}
