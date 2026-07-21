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
    
    public function parent()
    {
        return $this->belongsTo(MenuItem::class);
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function (MenuItem $item) {
            return $item->setOrders();
        });

        static::updating(function (MenuItem $item) {
            return $item->setOrders();
        });
    }

    public function setOrders()
    {
        MenuItem::where('parent_id', $this->parent_id)
            ->where('order', '>=', $this->order)
            ->orderBy('order', 'desc')
            ->increment('order', 1, ['updated_at' => now()]);
        return true;
    }
}
