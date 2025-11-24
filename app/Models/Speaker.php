<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Speaker extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'info',
        'contact_id',
        'image',
    ];

    public function events()
    {
        return $this->belongsToMany(Event::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
