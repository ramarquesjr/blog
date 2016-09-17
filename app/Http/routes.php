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

Route::get('/home', 'HomeController@index');
Route::get('/','Posts@index');
Route::get('/blog','Posts@index');
Route::get('posts/{id}','Posts@get');

Route::group(['prefix'=>'admin','middleware'=>'auth'], function(){
		Route::group(['prefix'=>'posts'], function(){
		Route::get('',[ 'as'=>'admin.posts.index', 'uses'=>'PostsAdminController@index']);
		Route::get('/create',[ 'as'=>'admin.posts.create', 'uses' => 'PostsAdminController@create' ]);
		Route::post('/store',[ 'as'=>'admin.posts.store', 'uses' => 'PostsAdminController@store' ]);
		Route::get('/edit/{id}',[ 'as'=>'admin.posts.edit', 'uses' => 'PostsAdminController@edit' ]);
		Route::get('/destroy/{id}',[ 'as'=>'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy' ]);
		Route::put('/update/{id}',[ 'as'=>'admin.posts.update', 'uses' => 'PostsAdminController@update' ]);
	});
});

Route::auth();

//A partir da descrição do método a rota é criada. Por ex getLogin seria o métodoAction.
Route::controllers([
		'auth' => 'Auth\AuthController',
		'password' => 'Auth\PasswordController'
	]);
// Testes do processo de autenticação do Laravel
Route::get('/auth', function(){
	if (Auth::attempt(['email'=>'ralvesmj@gmail.com','password'=>'123456'])){
		return "Oi";
	}
	return "False";
});
Route::get('/auth/logout', function(){
	Auth::logout();
});