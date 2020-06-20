<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//// Hello
//Route::get('/v1/hello', 'HelloController@index');
//
//// 変数宣言
//Route::get('/v1/hello/var', 'HelloController@varIndex');
//
//// 文字列結合
//Route::get('/v1/hello/str-implode', 'HelloController@strImplode');
//
//// 連想配列
//Route::get('/v1/hello/array2', 'HelloController@arr2');
//
//// foreach
//Route::get('/v1/hello/foreach', 'HelloController@foreachFunc');
//
//// function
//Route::get('/v1/hello/function', 'HelloController@funcFunc');

// 端末 API KEY 生成
Route::post('/v1/key', 'Api\KeyController@generate');

// Userデータの取得
Route::get('/v1/user', 'Api\UserController@show');

// Userデータの更新
Route::patch('/v1/user', 'Api\UserController@update');

// 位置情報取得
Route::get('/v1/user/location', 'Api\UserLocationController@index');

// 位置情報更新
Route::post('/v1/user/location', 'Api\UserLocationController@create');

// 公園一覧取得
Route::get('/v1/park', 'Api\ParkController@index');

// 公園個別データ取得
Route::get('/v1/park/{id}', 'Api\ParkController@show');

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
