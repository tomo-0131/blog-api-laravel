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

// 投稿作成 (Create)
Route::post('/posts/create', 'App\Http\Controllers\PostController@create');
// 投稿一覧取得 (Read)
Route::get('/posts', 'App\Http\Controllers\PostController@index');
// 投稿詳細取得 (Read)おtp
Route::get('/posts/{id}', 'App\Http\Controllers\PostController@show');
// 投稿更新 (Update) 一部変更のため,PATCHを使用
Route::patch('posts/update/{id}', 'App\Http\Controllers\PostController@update');
// 投稿削除 (Delete)
Route::delete('posts/{id}', '\App\Http\Controllers\PostController@delete');

// ユーザー登録
Route::post('/register', '\App\Http\Controllers\RegisterController@register');
