<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use \Illuminate\Database\Eloquent\Factories\HasFactory;

class Work extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'authors',
        'summary',
        'publication_date',
        'publisher_id',
        'link',
        'image',
    ];

    public function publisher()
    {
        return $this->belongsTo(Publisher::class, 'publisher_id');
    }
}
