<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Event extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'title',
        'subtitle',
        'Location_id',
        'info',
        'image',
        'published',
        'canceled',
    ];
    
    public function Location()
    {
        return $this->belongsTo(Location::class);
    }

    public function speakers()
    {
        return $this->belongsToMany(Speaker::class);
    }
    
    public function partners()
    {
        return $this->belongsToMany(Partner::class);
    }
}
