<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;


class SakilaContrller extends Controller
{
    //
    public function index(){


    $film = Film::orderBy('film_id','desc')->limit(10)->get();
   // dd($film);
    return view('sakila',compact('film'));
}


public function getFilmById($id){
	//return $id;

	$filmById = Film::find($id)->actor()->get();
	//Film::where('film_id',$id)->with('actor')->get();

	return $filmById;
}

}

