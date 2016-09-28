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
$api=app("Dingo\Api\Routing\Router");

$api->version("v1",['namespace'=>"Lost\Http\Controllers\Api"],function($api){

    $api->get('country',['uses'=>'AddressController@getCountry']);
    $api->get('state',['uses'=>'AddressController@getState']);


});
