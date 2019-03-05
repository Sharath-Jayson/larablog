<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //Post can belong to only one category

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
