<?php

namespace App\Http\Controllers;

use App\Models\post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $posts= post::orderBy('id','desc')->get(); 
      // $posts = DB::table('posts')->select('title','description','slug')->get();
            
       return view('posts.index',compact('posts'));
    }

    public function store (Request $request)
    {
      //return $request->all();
      $post = new Post();
      $post->title = $request->title;
      $post->description = $request->description;
      $post->slug = Str::slug($request->title,'-');
      $post->save();
     return redirect()->route('posts.view');
    }

   
iuyiyui
  
}
