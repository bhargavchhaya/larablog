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


//User routes

Route::group(['namespace' => 'User'], function(){
    Route::get('/'   ,                      'HomeController@index');
    Route::get('post/{post}',               'PostController@post')->name('post');
    Route::get('post/category/{category}',  'HomeController@category')->name('category');
    Route::get('post/tag/{tag}',            'HomeController@tag')->name('tag');
});



//Admin routes

Route::group(['namespace' => 'Admin'], function(){
    Route::get('admin/home',     'HomeController@index')->name('admin.home');
    Route::resource('admin/user',       'UserController');
    Route::resource('admin/post',       'PostController');
    Route::resource('admin/tag',        'TagController');
    Route::resource('admin/category',   'CategoryController');
    //Admin Auth routes
    Route::get('admin-login', 'Auth\LoginController@showLoginForm')->name('admin.login');
    Route::post('admin-login' ,'Auth\LoginController@login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
