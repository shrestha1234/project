<?php
Route::group(['role'=>'1','middleware'=>'auth.role'],function()
{

    Route::any('/lostitem',['as'=>'lostitem','uses'=>'Web\LoginController@ReportLost']);
    Route::any('/founditem',['as'=>'founditem','uses'=>'Web\LoginController@ReportFound']);
    Route::get('/dashboard',['as'=>'dashboard',function(){
        return view('dashboard');

    }]);
});