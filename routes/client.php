<?php
Route::group(['role'=>'1','middleware'=>'auth.role'],function()
{

    Route::any('/lostitem',['as'=>'lostitem','uses'=>'Web\LoginController@ReportLost']);
    Route::any('/founditem',['as'=>'founditem','uses'=>'Web\LoginController@ReportFound']);
    Route::any('/dashboard',['as'=>'dashboard','uses'=>'Web\LoginController@ai']);

});