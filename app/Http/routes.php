<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/','Posts@index');
Route::get('/blog','Posts@index');
Route::get('admin',[ 'as'=>'admin.posts.index', 'uses'=>'PostsAdminController@index']);
Route::get('admin/create',[ 'as'=>'admin.posts.create', 'uses' => 'PostsAdminController@create' ]);
Route::post('admin/store',[ 'as'=>'admin.posts.store', 'uses' => 'PostsAdminController@store' ]);
Route::get('admin/edit/{id}',[ 'as'=>'admin.posts.edit', 'uses' => 'PostsAdminController@edit' ]);
Route::put('admin/update/{id}',[ 'as'=>'admin.posts.update', 'uses' => 'PostsAdminController@update' ]);
Route::get('posts/{id}','Posts@get');
