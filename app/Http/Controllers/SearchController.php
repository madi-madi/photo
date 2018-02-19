<?php

namespace App\Http\Controllers;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Http\Request;
use App\Video;
class SearchController extends Controller
{
    //

    public function search(Request $request){
    	//dd($text);
      //return request input from form search
      $text = $request->text; 
     // dd($text);
      // query return video form table video
    $videos = Video::where('video_title','like','%'.$text.'%')->paginate(5);

    /* query return viedo from all tags semler with $text search
       pass $text to the  function with "use($parameter'$text')"
       whereHas()
    */
    $videoTags = Video::whereHas('tags', function($query) use ($text) {
      // you can choice any field you want not just tage_name
    	        return $query->where('tag_name',$text);
    })->paginate(5);

    /* query return viedo from all Categories semler with $text search
       pass $text to the  function with "use($parameter'$text')"
       whereHas()
    */

    $videoCategories = Video::whereHas('categorys',function($query) use($text){
    	return $query->where('category_name',$text);
    })->paginate(5);

    // Total process search with table videos,tags,categories

    $totalResult= $videos->total() + $videoTags->total() + $videoCategories->total();

    // marge all result in on array
    $itemsSearch = array_merge(
                   $videos->items() ,
                    $videoTags->items(),
                    $videoCategories->items()
                  );
    /* use function "collect" to make colection with all result and 
    use function "unique" to retrive the result unique
    */

    $itemsColection = collect($itemsSearch)->unique();// colection result search and return unique items*/

  //$curentPage = \Illuminate\Pagination\LengthAwarePaginator::resolveCurrentPage();
    // retrive the curent page
  $curentPage = LengthAwarePaginator::resolveCurrentPage(); 
  /* count total view result search*/
  $countViewResult = count($itemsColection)==0 ? 1 : count($itemsColection);/* note some error pagination*/
    
  $page = new LengthAwarePaginator($itemsColection,$totalResult,5,$curentPage);

        return view('result',compact('page','text'));




   // dd($page);
}
}
