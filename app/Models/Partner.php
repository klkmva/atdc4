<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Partner extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'short_name',
        'email',
        'website',
        'phone',
        'contact_id',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }

    protected function shortName(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }

    protected function adress(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value, ENT_QUOTES | ENT_HTML5, 'UTF-8')
        );
    }
}
