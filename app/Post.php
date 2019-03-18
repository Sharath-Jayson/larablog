<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'category_id','featured','slug','user_id'
    ];

    

    protected $dates = ["deleted_at"];
    //Post can belong to only one category

    public function category(){

        return $this->belongsTo('App\Category');
    }

    public function tags(){

        return $this->belongsToMany('App\Tag');
    }

    public function user(){

        return $this->belongsTo('App\User');
    }

    public function getFeaturedAttribute($featured){
        return asset($featured);
    }
}
