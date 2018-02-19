<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class AvatarController extends Controller
{
    //

    public function vue_avatar(){

    	return view('vue_avatar');
    }


        public function store_vue_avatar(Request $request){
                //die($request->all());
    	    		$request->user()->update(['avatar'=> $request->image]);
			/*$request->user()->avatar =$request->image;
			$request->user()->save();*/
			return response(null,202);
    }
}
