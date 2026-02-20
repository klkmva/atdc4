<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Support\HtmlString;
use Illuminate\Database\Eloquent\SoftDeletes;

class Option extends Model
{
    use SoftDeletes;
    
    protected $fillable = [
        'user_id',
        'book_id',
        'comment',
        'created_at',
        'updated_at',
    ];

    public function dates(): BelongsToMany
    {
        return $this->belongsToMany(Date::class)->withPivot([])->using(DateOption::class);
    }


    public function User()
    {
        return $this->belongsTo(User::class);
    }

    public function Book()
    {
        return $this->belongsTo(Book::class);
    }

    protected function comment(): Attribute
    {
        return Attribute::make(
            get: fn($value) => html_entity_decode($value)
        );
    }

    protected function title(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->book->title
        );
    }

    protected function name(): Attribute
    {
        return Attribute::make(
            get: fn($value) => $this->user->name
        );
    }

    public function getHtmlComment(): HtmlString
    {
        return new HtmlString($this->comment);
    }
}
