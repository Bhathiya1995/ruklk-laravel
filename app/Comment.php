<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Get all of the owing sommentable models,
    public function commentable()
    {
        return $this->morphTo();
    }
    
    

    
}
