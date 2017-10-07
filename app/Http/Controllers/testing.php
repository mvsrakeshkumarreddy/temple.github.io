<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\images;

use App\videos;
use App\galleryimages;
use App\gallerylink;
use Illuminate\Support\Facades\Input;

class testing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
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

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $user = new images;
            $user->title=Input::get('name');
            $user->comment=Input::get('comment');
            $user->username=Input::get('username');
           
            if(Input::hasFile('image')){

                $images=Input::file('image');
                $path = base_path('public');
                $images->move($path.'/',$images->getClientOriginalName());

                $user->name = $images->getClientOriginalName();


            }

        $user->save();

        $usergal=galleryimages::all();
        $user=images::all();
        $uservid=videos::all();
        $userlin=gallerylink::all();
        return redirect('/gallery');
        //return view('gallery',compact('user','uservid','usergal'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function myPost(Request $request)
    {
        $posts = images::paginate(5);

       

        return view('mypost',compact('posts'));
    }

    public function showallhome()
    {
        $user=images::orderBy('id','desc')->paginate(5);
        return view('home',compact('user'));
    }


    public function showall()
    {
        $usergal=galleryimages::all();
        $user=images::all();
        $uservid=videos::all();
        $userlin=gallerylink::all();
        return view('gallery',compact('user','uservid','usergal','userlin'));
    }

    public function show($id)
    {
        $user=images::findOrFail($id);

        return view('gallery',compact('user'));

        //return view('showall',compact('user'));
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
