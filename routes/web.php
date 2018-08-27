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
    return redirect()->route('home');
});

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/home', 'HomeController@search');
Route::get('/post/detail/{id}', 'PostDetailController@index')->name('post.detail');
Route::post('/post/detail/{id}', 'PostDetailController@addComment');
Route::get('/post/detail/comment/{commid}/{id}', 'PostDetailController@delComment');

Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

Route::get('/register', 'RegisterController@index')->name('register');
Route::post('/register', 'RegisterController@register');
Route::get('/login/logout', 'LoginController@logout')->name('logout');

Route::group(['middleware'=>['schk']],function(){

	Route::get('/dashboard','DashboardController@index')->name('dashboard');
	Route::get('/dashboard/profile','DashboardController@profile')->name('dashboard.profile');
	Route::post('/dashboard/profile','DashboardController@update');
	Route::get('/dashboard/post','DashboardController@post')->name('post.list');
	Route::post('/dashboard/post/search','DashboardController@search');
	Route::get('/dashboard/post/create','DashboardController@create')->name('post.create');
	Route::post('/dashboard/post/create','DashboardController@store');
	Route::get('/dashboard/post/edit/{id}', 'DashboardController@edit')->name('post.edit');
	Route::post('/dashboard/post/edit/{id}', 'DashboardController@postUpdate');
	Route::get('/dashboard/post/delete/{id}', 'DashboardController@delete')->name('post.delete');
	Route::post('/dashboard/post/delete/{id}', 'DashboardController@destroy');
});


