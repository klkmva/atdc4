<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    protected $fillable = [
        'type',
        'order',
        'parent_id',
        'url',
        'title',
        'content',
        'created_at',
        'updated_at',
    ];
    
    public function MenuItem()
    {
        return $this->belongsTo(MenuItem::class);
    }
}
