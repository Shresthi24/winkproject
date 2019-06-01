<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use Carbon\Carbon;
use App\client;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Collection;
use Wink\WinkPost;

class blogController extends Controller
{
   

public function index()
{
	//$date = Carbon::today()->subDays(30);
  // $post = WinkPost::with('tags')
   	//		->WhereDate('publish_date','>=',Carbon::now()->subDays(30))
      //      ->get();
        $post = WinkPost::with('tags')
        ->orderBy('publish_date','DESC')
        ->limit(2)
            ->get();
          
         

    //dd($post);
    //dd(getdate());
            	//return view('show')->with(compact('client', 'client1','client2','client3','client4','client5'));
      //return view('blogpost',['client'=>$post])->with('publish',$publish)->with('excerpt',$excerpt)->with('title',$title)->with('featured_image',$featured_image);
      //return view('blogpost',['client'=>$post])->with('reqst',$reqst);
            return view('blogpost',['client'=>$post]);
}

public function create($blog_id)
{
	 $id=$blog_id; 
//dd($id);
        
	//$date = Carbon::today()->subDays(30);
   $feature= WinkPost::with('tags')
   			->where('id','=',$id)
            ->pluck('featured_image');

        $title= WinkPost::with('tags')
   			->where('id','=',$id)
            ->pluck('title');

            $excerpt= WinkPost::with('tags')
   			->where('id','=',$id)
            ->pluck('excerpt');

            $body= WinkPost::with('tags')
   			->where('id','=',$id)
            ->pluck('body');

            $publish= WinkPost::with('tags')
   			->where('id','=',$id)
            ->pluck('publish_date');

            $post= WinkPost::with('tags')
   			->where('id','=',$id)
            ->get();

            

  //dd($post);
    //dd(getdate());
     return view('blogpage',['client'=>$post]);
   //return view('blogpage')->with('feature',$feature)->with('title',$title)->with('excerpt',$excerpt)->with('body',$body)->with('publish',$publish);
}

public function load_data(Request $request)
    {
       $output = '';
        $id = $request->id;
        //dd($id)
        
       // $posts= WinkPost::with('tags')
        //->WhereDate('publish_date','<',Carbon::now()->subDays(30))
          //  ->get();
            $posts = WinkPost::with('tags')
                  ->Where('publish_date','<',$id)
                    ->orderBy('publish_date','DESC')
                    ->get();
         

        return view('oldblogpage',['client'=>$posts]);

}

}
