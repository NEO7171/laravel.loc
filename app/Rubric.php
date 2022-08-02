<?php

namespace App;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Rubric
 * @package App
 * @mixin Builder
 */
class Rubric extends Model
{

    public function posts()
    {
        return $this->hasMany('App\Post');
        // или
       // return $this->hasOne(Post::class);
    }
}
