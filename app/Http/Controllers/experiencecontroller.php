<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\experience;

use Illuminate\Support\Facades\Input;

class experiencecontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $user = new experience;
            $user->experiencetitle=Input::get('experiencetitle');
            $user->experiencecomment=Input::get('experiencecomment');
            $user->experienceusername=Input::get('experienceusername');
           
            if(Input::hasFile('experienceimage')){

                $images=Input::file('experienceimage');
                $path = base_path('public');
                $images->move($path.'/',$images->getClientOriginalName());

                $user->experienceimage = $images->getClientOriginalName();


            }

        $user->save();

        
        $user=experience::orderBy('id','desc')->paginate(5);
        
        return redirect('/experience');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function showall()
    {
        $user=experience::orderBy('id','desc')->paginate(5);
        
        return view('experience',compact('user'));
    }


    public function show($id)
    {
        //
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
