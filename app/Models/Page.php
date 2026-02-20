<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title',
        'menu',
        'content',
        'created_at',
        'updated_at',
    ];
}
