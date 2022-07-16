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

Route::get('/', function () {
    return view('welcome');
    
});

Route::group(['prefix' => 'admin','middleware'=>'auth'], function() {
    Route::get('news/create','Admin\NewsController@add')->middleware('auth');
    Route::post('news/create','Admin\NewsController@create')->middleware('auth');
    Route::get('news', 'Admin\NewsController@index')->middleware('auth'); // 追記
    Route::get('news/edit', 'Admin\NewsController@edit')->middleware('auth'); // 追記
    Route::post('news/edit', 'Admin\NewsController@update')->middleware('auth'); // 追記
    Route::get('news/delete', 'Admin\NewsController@delete')->middleware('auth');


    // Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    // Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth');

    Route::get('http://XXXXXX.jp/XXX','Admin\AAAController@bbb');
});


Route::group(['prefix' =>'admin'], function() {
    Route::get('profile/create','Admin\ProfileController@add')->middleware('auth');
    Route::post('profile/create','Admin\ProfileController@create')->middleware('auth');
    Route::get('profile/edit','Admin\ProfileController@edit')->middleware('auth'); // 追記
    Route::post('profile/edit', 'Admin\ProfileController@update')->middleware('auth'); // 追記
    Route::get('profile/delete', 'Admin\ProfileController@delete')->middleware('auth');
    Route::get('profile', 'Admin\ProfileController@index')->middleware('auth'); // 追記

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'NewsController@index');






//  新しく作り直したNewsControllerです。
Route::group(['prefix' => 'admin'], function() {
    Route::get('news/create_2', 'Admin\NewsController_2@add');
});


// 18. 「PHP/Laravel 09 Routingについて理解する」の課題3
Route::get('XXXXX/XXX', 'Admin\AAAController@bbb');



// 新しく作り直したProfileControllerです。
Route::group(['prefix' => 'admin'], function() {
    Route::get('profile/create_2', 'Admin\ProfileController_2@add');
    Route::get('profile/edit_2','Admin\ProfileController_2@edit');
});








