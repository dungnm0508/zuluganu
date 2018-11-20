<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',['as'=>'getInput','uses'=>'CheckController@getInput']);

Route::get('dashboard',['as'=>'getdashboard','uses'=>'CheckController@getdashboard']);

Route::get('cron',['as'=>'getcron','uses'=>'CheckController@getcron']);

Route::post('postCanChi',['as'=>'postCanChi','uses'=>'CheckController@postCanChi']);

Route::post('postDataCungTrach',['as'=>'postDataCungTrach','uses'=>'CheckController@postDataCungTrach']);

