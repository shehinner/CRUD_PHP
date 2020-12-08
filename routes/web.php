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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('movie', 'MovieController');
Route::get('movie/destroy/{id}', ['as'=> 'movie/destroy', 'uses' => 'MovieController@destroy']);
Route::post('movie/show', ['as' => 'movie/show', 'uses' => 'MovieController@show']);
Route::post('movie/update/{id}',['as' => 'movie/update', 'uses' =>'MovieController@update']);

Route::resource('user', 'UserController');
Route::get('user/destroy/{id}', ['as'=> 'user/destroy', 'uses' => 'UserController@destroy']);
Route::post('user/show', ['as' => 'user/show', 'uses' => 'UserController@show']);
Route::post('user/update/{id}',['as' => 'user/update', 'uses' =>'UserController@update']);

Route::resource('rentail', 'RentailController');
Route::get('rentail/destroy/{id}', ['as'=> 'rentail/destroy', 'uses' => 'RentailController@destroy']);
Route::post('rentail/show', ['as' => 'rentail/show', 'uses' => 'RentailController@show']);
Route::post('rentail/update/{id}',['as' => 'rentail/update', 'uses' =>'RentailController@update']);

Route::resource('category', 'CategoryController');
Route::get('category/destroy/{id}', ['as'=> 'category/destroy', 'uses' => 'CategoryController@destroy']);
Route::post('category/show', ['as' => 'category/show', 'uses' => 'CategoryController@show']);
Route::post('category/update/{id}',['as' => 'category/update', 'uses' =>'CategoryController@update']);

Route::resource('category_movie', 'Category_movieController');
Route::get('category_movie/destroy/{id}', ['as'=> 'category_movie/destroy', 'uses' => 'Category_movieController@destroy']);
Route::post('category_movie/show', ['as' => 'category_movie/show', 'uses' => 'Category_movieController@show']);
Route::post('category_movie/update/{id}',['as' => 'category_movie/update', 'uses' =>'Category_movieController@update']);

Route::resource('movie_rental', 'Movie_rentalController');
Route::get('movie_rental/destroy/{id}', ['as'=> 'movie_rental/destroy', 'uses' => 'Movie_rentalController@destroy']);
Route::post('movie_rental/show', ['as' => 'movie_rental/show', 'uses' => 'Movie_rentalController@show']);
Route::post('movie_rental/update/{id}',['as' => 'movie_rental/update', 'uses' =>'Movie_rentalController@update']);

Route::resource('rol', 'RolController');
Route::get('rol/destroy/{id}', ['as'=> 'rol/destroy', 'uses' => 'RolController@destroy']);
Route::post('rol/show', ['as' => 'rol/show', 'uses' => 'RolController@show']);
Route::post('rol/update/{id}',['as' => 'rol/update', 'uses' =>'RolController@update']);
Route::get('rol/Roles', ['as' => 'rol/Roles', 'uses' => 'RolController@Roles']);

Route::resource('status', 'StatusController');
Route::get('status/destroy/{id}', ['as'=> 'status/destroy', 'uses' => 'StatusController@destroy']);
Route::post('status/show', ['as' => 'status/show', 'uses' => 'StatusController@show']);
Route::post('status/update/{id}',['as' => 'status/update', 'uses' =>'StatusController@update']);

Route::resource('type_status', 'Type_statusController');
Route::get('type_status/destroy/{id}', ['as'=> 'type_status/destroy', 'uses' => 'Type_statusController@destroy']);
Route::post('type_status/show', ['as' => 'type_status/show', 'uses' => 'Type_statusController@show']);
Route::post('type_status/update/{id}',['as' => 'type_status/update', 'uses' =>'Type_statusController@update']);