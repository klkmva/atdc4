<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulletinEvent extends Model
{
    protected $fillable = [
        'event_id',
        'bulletin_id',
    ];
}
