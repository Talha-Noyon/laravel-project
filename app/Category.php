<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $primaryKey
   	protected $primaryKey = 'category_id';
    public $timestamps = false;
    public function posts()
    {
       return $this->hasMany('App\Post', 'category_id');
    }
}
