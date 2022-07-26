<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function tagPosts()
    {
        return $this->belongsToMany(Post::class);
    }

}
