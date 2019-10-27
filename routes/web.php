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

Auth::routes();

Route::prefix('/lv-admin')->group(function () {

    Route::get('/', 'Auth\LoginController@showLoginForm');
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    /**
     * Post Routes
     */
    Route::prefix('/posts')->group(function () {
        Route::get('/add', 'PostController@index')->name('post');
        Route::post('/store', 'PostController@store')->name('post.store');
        Route::get('/', 'PostController@manage')->name('post.manage');
//    Route::get('/unpublished/{id}', 'PostController@unpublished')->name('brand.unpublished');
//    Route::get('/published/{id}', 'PostController@published')->name('brand.published');
    Route::get('/edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('/update', 'PostController@update')->name('post.update');
        Route::post('/delete', 'PostController@delete')->name('post.delete');
    });

    /**
     * Category Route
     */
    Route::prefix('category')->group(function () {
        Route::get('/', 'CategoryController@index')->name('category');
        Route::post('/store', 'CategoryController@store')->name('category.store');
        Route::get('/unpublished/{id}', 'CategoryController@unpublished')->name('category.unpublished');
        Route::get('/published/{id}', 'CategoryController@published')->name('category.published');
        Route::post('/update', 'CategoryController@update')->name('category.update');
        Route::post('/delete', 'CategoryController@delete')->name('category.delete');
    });
});

/**
 * Front-End route
 */

Route::get('/', 'FrontEndController@index');
Route::get('post/{id}', 'FrontEndController@single_post')->name('single.post');
Route::get('category/{id}', 'FrontEndController@category_post')->name('category.post');