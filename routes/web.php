<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
//Route::get('/',['as'=>'home','uses'=>
//function()
//{
//    return view('home');
//}
//]);
Route::any('/',['as'=>'login','uses'=>'Web\LoginController@Login']);
Route::any('/register',['as'=>'register','uses'=>'Web\LoginController@Register']);
Route::get('/searchlost',['as'=>'searchlost','uses'=>'Web\LoginController@Search']);
Route::get('/searchfound',['as'=>'searchfound','uses'=>'Web\LoginController@Lost']);
Route::get('/lostitem',['as'=>'lostitem','uses'=>'Web\LoginController@ReportLost']);
Route::get('/founditem',['as'=>'founditem','uses'=>'Web\LoginController@ReportFound']);
Route::get('/information',function(){
    return view('information');
});
Route::get('/contact',['as'=>'contact','uses'=>'Web\LoginController@Contact']);
