<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Publisher extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'contact_id',
        'website',
    ];

    public function works()
    {
        return $this->belongsToMany(Work::class);
    }

    public function contact()
    {
        return $this->belongsTo(Contact::class, 'contact_id');
    }
}
