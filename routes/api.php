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
    $api->any('register',['uses'=>'UserController@Register']);
    $api->any('login',['uses'=>'UserController@Login']);
    $api->any('lostitem',['uses'=>'UserController@ItemTypeLost']);
    $api->any('founditem',['uses'=>'UserController@ItemTypeFound']);
    $api->get('item_type',['uses'=>'ItemController@getCategory']);
    $api->get('found_item',['uses'=>'ItemController@getFoundItem']);
    $api->get('lost_item',['uses'=>'ItemController@getLostItem']);
    $api->get('allfound',['uses'=>'ItemController@getFound']);
    $api->get('alllost',['uses'=>'ItemController@getLost']);
    $api->any('lostdetail',['uses'=>'ItemController@getLostdetail']);
    $api->any('founddetail',['uses'=>'ItemController@Founddetail']);
    $api->any('searchlost',['uses'=>'ItemController@getSearchLost']);
    $api->any('searchfound',['uses'=>'ItemController@getSearchFound']);

    $api->any('lostdetailview/{id}',['uses'=>'ItemController@getLostDetailView']);
    $api->any('founddetailview/{id}',['uses'=>'ItemController@getFoundDetailView']);

    $api->any('ai/{id}',['uses'=>'ItemController@getAI']);


});