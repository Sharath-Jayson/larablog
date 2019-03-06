<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Post extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'content', 'category_id','featured','slug'
    ];

    public function getFeatuuredAttribute($featured)
    {
        return asset($featured);
    }

    protected $dates = ["deleted_at"];
    //Post can belong to only one category

    public function category(){

        return $this->belongsTo('App\Category');
    }
}
