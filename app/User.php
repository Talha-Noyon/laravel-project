<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    //public $table = 'cat';
    public $primaryKey = 'user_id';
    public $timestamps = false;
    public function comments()
    {
       return $this->hasMany('App\Post', 'user_id');
    }
}
