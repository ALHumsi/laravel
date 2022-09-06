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

Route::group(['prefix' => 'user' ,'middleware' => 'auth'], function () {

    //ROUTES FOR POSTS
    Route::get('/posts', 'PostsController@index')->name('posts');
    Route::get('/post/create', 'PostsController@create')->name('post.create');
    Route::post('/post/store', 'PostsController@store')->name('post.store');
    Route::get('/post/delete/{id}', 'PostsController@destroy')->name('post.delete');
    Route::get('/post/trashed', 'PostsController@trashed')->name('post.trashed');
    Route::get('/post/hdelete/{id}', 'PostsController@hdelete')->name('post.hdelete');
    Route::get('/post/restore/{id}', 'PostsController@restore')->name('post.restore');
    Route::get('/post/edit/{id}', 'PostsController@edit')->name('post.edit');
    Route::post('/post/update/{id}', 'PostsController@update')->name('post.update');

    //ROUTES FOR CATEGORIES
    Route::get('/category', 'CategoryController@index')->name('category');
    Route::get('/category/create', 'CategoryController@create')->name('category.create');
    Route::post('/category/store', 'CategoryController@store')->name('category.store');
    Route::get('/category/edit/{id}', 'CategoryController@edit')->name('category.edit');
    Route::post('/category/update/{id}', 'CategoryController@update')->name('category.update');
    Route::get('/category/delete/{id}', 'CategoryController@destroy')->name('category.delete');

    //ROUTES FOR TAGS
    Route::get('/tag', 'TagController@index')->name('tag');
    Route::get('/tag/create', 'TagController@create')->name('tag.create');
    Route::post('/tag/store', 'TagController@store')->name('tag.store');
    Route::get('/tag/edit/{id}', 'TagController@edit')->name('tag.edit');
    Route::post('/tag/update/{id}', 'TagController@update')->name('tag.update');
    Route::get('/tag/delete/{id}', 'TagController@destroy')->name('tag.delete');



    //ROUTES FOR TAGS
    Route::get('/users', 'UsersController@index')->name('users');
    Route::get('/users/admin/{id}', 'UsersController@admin')->name('users.admin');
    Route::get('/users/notadmin/{id}', 'UsersController@notadmin')->name('users.not.admin');
    Route::get('/users/create', 'UsersController@create')->name('users.create');
    Route::post('/users/store', 'UsersController@store')->name('users.store');
    Route::get('/users/delete/{id}', 'UsersController@destroy')->name('users.delete');



});

Route::get('/abd', function(){

    return App\User::find(1)->profile;

})->name('abdo');
