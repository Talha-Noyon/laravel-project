<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $primaryKey = 'comment_id';
    public $timestamps = false;
    public function post()
    {
       return $this->belongsTo('App\Post', 'post_id');
    }
    public function users()
    {
       return $this->hasMany('App\Post', 'user_id');
    }
}
