<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:api');
$api=app("Dingo\Api\Routing\Router");

$api->version("v1",['namespace'=>"Lost\Http\Controllers\Api"],function($api){

    $api->get('country',['uses'=>'AddressController@getCountry']);
    $api->get('state',['uses'=>'AddressController@getState']);
    $api->get('zone',['uses'=>'AddressController@getZone']);
    $api->get('district',['uses'=>'AddressController@getDistrict']);
    $api->get('category',['uses'=>'AddressController@getCategory']);
    $api->any('register',['uses'=>'UserController@Register']);
    $api->any('login',['uses'=>'UserController@Login']);

});