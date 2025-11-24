<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Actu extends Model
{
    use HasFactory;
    
    protected $fillable = [
        'date',
        'title',
        'info',
        'image',
    ];
}
