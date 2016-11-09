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


Route::get('/information',function(){
    return view('information');

});



Route::get('/alllostposts',['as'=>'alllostposts','uses'=>'Web\LoginController@alllost']);
Route::get('/allfoundposts',['as'=>'allfoundposts','uses'=>'Web\LoginController@allfound']);
Route::any('/message',['as'=>'message','uses'=>'Web\LoginController@Message']);
Route::any('/lostdetailview',['as'=>'lostdetailview','uses'=>'Web\LoginController@lostdetailview']);
Route::any('/founddetailview',['as'=>'founddetailview','uses'=>'Web\LoginController@founddetailview']);

Route::any('/searchlostlist',['as'=>'search','uses'=>'Web\ItemController@SearchLost']);
Route::any('/searchlost',['as'=>'searchlost','uses'=>'Web\LoginController@SearchLost']);
Route::any('/searchfound',['as'=>'searchfound','uses'=>'Web\LoginController@SearchFound']);

Route::get('/contact',['as'=>'contact','uses'=>'Web\LoginController@Contact']);
Route::get('/logout',['as'=>'logout',function(){
    Session::flush();
    return redirect()->route('login');
}]);
include_once ('client.php');