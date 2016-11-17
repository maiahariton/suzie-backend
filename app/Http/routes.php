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

Route::get('/', function()
    {
        return View::make('home');
    });
	Route::get('admin', function()
    {
        return View::make('admin');
    });

   Route::get('/homepage-one',function(){
   return view('homepage-one');
});


   Route::get('/carousel',function(){
   return view('carousel');
});
   Route::get('/carouselView',function(){
   return view('carouselMainView');
});
Route::get('/videos',function(){
return view('videosHome');
});
Route::get('/addvideo',function(){
return view('addVideo');
});
Route::get('/editvideo',function(){
return view('editVideo');
});
Route::get('/addslide',function(){
return view('addslide');
});
Route::get('/callouts',function(){
return view('callouts');
});

Route::get('/addcallouts',function(){
return view('addCallouts');
});
Route::get("index","homepage@index");
Route::get("add","homepage@add");
Route::post("newsletterPage","newsletterPageContoroller@add");
Route::post("promocallout","promocalloutHide@add");
