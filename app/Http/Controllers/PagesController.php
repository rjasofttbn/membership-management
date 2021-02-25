<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use stdClass;

class PagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * /@return \Illuminate\Http\Response
     */
    public function index()
    {
        $singlePost  = new stdClass();
        $singlePost->id  = 1;
        $singlePost->title  = "sample 1";
        $singlePost->title  = 'Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. A, est? Aperiam delectus corrupti nesciunt, veritatis 
        soluta, officia rem sit quisquam ea quasi, sed perferendis vero itaque suscipit? 
        Iusto, officia consequuntur.';
        $singlePost->total_view  = 200;
        array_push($POST, $singlePost);
        $singlePost  = new stdClass();

        $singlePost->id  = 2;
        $singlePost->title  = "sample 2";
        $singlePost->title  = 'Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. A, est? Aperiam delectus corrupti nesciunt, veritatis 
        soluta, officia rem sit quisquam ea quasi, sed perferendis vero itaque suscipit? 
        Iusto, officia consequuntur.';
        $singlePost->total_view  = 200;
        array_push($POST, $singlePost);
        return view('posts',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function postsView()
    {
        $posts=[];
    //     $user = new stdClass();
    //     $user->name = "Faruk";
    //     $user->age = 5;
    //    return view('posts',compact('user'));
    $singlePost  = new stdClass();
    $singlePost->id  = 1;
    $singlePost->title  = "sample 1";
    $singlePost->description  = 'Lorem ipsum, dolor sit amet consectetur 
    adipisicing elit. A, est? Aperiam delectus corrupti nesciunt, veritatis 
    soluta, officia rem sit quisquam ea quasi, sed perferendis vero itaque suscipit? 
    Iusto, officia consequuntur.';
    $singlePost->total_view  = 200;
    array_push($posts, $singlePost);


    $singlePost  = new stdClass();
    $singlePost->id  = 2;
    $singlePost->title  = "sample 2";
    $singlePost->description  = 'Lorem ipsum, dolor sit amet consectetur 
    adipisicing elit. A, est? Aperiam delectus corrupti nesciunt, veritatis 
    soluta, officia rem sit quisquam ea quasi, sed perferendis vero itaque suscipit? 
    Iusto, officia consequuntur.';
    $singlePost->total_view  = 200;
    array_push($posts, $singlePost);
    return view('posts', compact('posts'));     
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post  = new stdClass();
        $post->id  = $id;
        $post->title  = "sample 2";
        $post->description  = 'Lorem ipsum, dolor sit amet consectetur 
        adipisicing elit. A, est? Aperiam delectus corrupti nesciunt, veritatis 
        soluta, officia rem sit quisquam ea quasi, sed perferendis vero itaque suscipit? 
        Iusto, officia consequuntur.';
        $post->total_view  = 200;
       // array_push($post, $Post);
        return view('post-single', compact('post'));  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
