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

//トップページ
Route::get('/', 'TopPageController@show');

//お問い合わせページ
Route::get('/contact', 'ContactPageController@show');

//管理者用　更新情報投稿画面ページ
Route::get('/admin/info', 'AdminInformationPageController@show');