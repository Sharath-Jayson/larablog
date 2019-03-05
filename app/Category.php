<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    public function posts(){

     //category belongs to(has many ) posts

     return $this->hasMany('App\Post');

    }
}
