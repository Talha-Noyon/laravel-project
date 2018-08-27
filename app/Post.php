<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //public $table = 'cat';
    protected $primaryKey = 'post_id';
    public $timestamps = false;
    public function comments()
    {
       return $this->hasMany('App\Comment', 'post_id');
    }
    public function category()
    {
       return $this->belongsTo('App\Category', 'category_id');
    }
}
