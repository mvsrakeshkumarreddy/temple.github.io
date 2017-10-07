<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\image;

Route::get('/', 'testing@showallhome');
/*
Route::get('home',function(){

	return view('home');
});
*/
Route::get('about',function(){

	return view('about');

});



Route::get('announcements','announce@showall');

Route::get('contact',function(){

	return view('contact');
});

Route::get('gallery','testing@showall');

Route::get("gallery/{id}",'testing@show');

Route::get('map',function(){

	return view('map');
});

Route::get('mypost', function(){

	return view('mypost')->with('mypost',image::paginate(5));

});


Route::get('experience','experiencecontroller@showall');

//Route::post('upload','UploadController@upload');

//Route::post('upload','ImageController@upload');

//Route::get('file','testing@index');
Route::post('store','testing@store');


Route::post('announcements','announce@store');

Route::post('videoaddition','video@store');

Route::post('suggessionsend','suggession@store');

Route::post('gallery','galleryimage@store');

Route::post('imagelinkupload','link@store');

Route::post('experience','experiencecontroller@store');



Route::group(['middleware'=>['web']],function (){

Route::get('/login',['as'=>'login','uses'=>'AuthController@login']);
Route::post('/handleLogin',['as'=>'handleLogin','uses'=>'AuthController@handleLogin']);
Route::get('/home',['middleware'=>'auth', 'as'=>'home','uses'=>'UsersController@home']);
Route::get('/logout',['as'=>'logout','uses'=>'AuthController@logout']);
Route::resource('users','UsersController',['only'=>['create','store']]);
});
