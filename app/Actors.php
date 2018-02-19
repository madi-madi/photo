<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actors extends Model
{
    //
    protected $table = "actor";
    protected $primaryKey = "actor_id";
    public $timestamps= false;

    public function film(){
    	return $this->belongsToMany('App\Film','film_actor','film_id','actor_id');
    }
}
