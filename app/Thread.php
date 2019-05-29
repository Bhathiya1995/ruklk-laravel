<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Thread extends Model
{
    protected $guarded=[];

    // Polymorphic relationship->coloumn reference one or two parent tables
    public function comments()
    {
        return $this->morphMany(comment::class,'commentable');
    }
}
