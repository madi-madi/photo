<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = "film";
    protected $primaryKey = "film_id";
    
    public $timestamps= false;


    public function actor(){

    	return $this->belongsToMany('App\Actors','film_actor','film_id','actor_id');
    }
}
