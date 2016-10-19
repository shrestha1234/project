<?php
Route::group(['role'=>'1','middleware'=>'auth.role'],function()
{
    Route::get('/searchlost',['as'=>'searchlost','uses'=>'Web\LoginController@Search']);
    Route::get('/searchfound',['as'=>'searchfound','uses'=>'Web\LoginController@Lost']);
    Route::get('/lostitem',['as'=>'lostitem','uses'=>'Web\LoginController@ReportLost']);
    Route::get('/founditem',['as'=>'founditem','uses'=>'Web\LoginController@ReportFound']);
    Route::get('/dashboard',['as'=>'dashboard',function(){
        return view('dashboard');

    }]);
});