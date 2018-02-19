<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    //
  protected $fillable = [
        'video_name', 'category_id'
    ];

    public function tags(){
    	return $this->belongsToMany('\App\Tag','tag_video','tag_id','video_id');
    }


    public function categorys(){

    	return $this->belongsTo('\App\Category','category_id');
    }
}
