<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Location extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'name',
        'address',
        'google_maps_url',
    ];

    public function events()
    {
        return $this->hasMany((Event::class));
    }
}
