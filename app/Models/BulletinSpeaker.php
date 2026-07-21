<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BulletinSpeaker extends Model
{
    protected $fillable = [
        'speaker_id',
        'bulletin_id',
    ];
}
