<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;



class UploadController extends Controller
{

    public function upload(Request $request){


$user=new file;
$user->title=Input::get('name');
if(Input::hasFile('image')){

       
    $file=Input::file('image');
    $file->move('uploads',$file->getClientOriginalName());

$user->name=$file->getClientOriginalName();
   // echo '<img src="uploads/' .$file->getClientOriginalName() . '"/>';
}

$user->save();
return 'data added';

    }
   
}
