<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Casts\Attribute;

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

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }
}
