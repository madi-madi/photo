<?php

namespace App\Http\Controllers;
use App\Http\Requests\ImageRequest;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    //

    public function upload(Request $request){
    	//upload image
    //	return $request->image->store('public');
    //	if ($request->hasFile('image')) {
    		# code...
    		//return "Done";
    		//$request->image->save('public');
    		//return 'Yes';

    	//}

    //	if ($request->hasFile('image')) {
    		//getClientOriginalName--getClientOrigialName
  //   $imageName = $request->image->getClientOriginalName();
  //   $request->image->storeAs('public',$imageName);
  // dd($imageName);
	
	//	}
     return($request->image);
      if ($request->hasFile('image')) {
        # code...
        $imageName = $request->image->getClientOriginalName();
        $request->image->storeAs('public',$imageName);
        $request->user()->update(['image'=>$imageName]);
        return response(null,202);
      }
    	//	$request->user()->update(['avatar'=> $request->image]);
			/*$request->user()->avatar =$request->image;
			$request->user()->save();*/
			

    }


    public function saveImage(ImageRequest $request){
    	//return $request->all();
    	if ($request->hasFile('image')) {

           $imageName = $request->image->getClientOriginalName();
           $request->image->storeAs('public',$imageName);
           $request->user()->update(['image'=> $imageName]);
  // dd($imageName);
           return response(null,202);
	
		}


    }
}
