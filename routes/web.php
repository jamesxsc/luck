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
use Illuminate\Support\Facades\Auth;

// Static Pages
Route::get('/about', 'PagesController@getAbout')->name('home');
Route::get('/contact', 'PagesController@getContact');
Route::get('/', 'PagesController@getHome');

// Dynamic Pages
Route::get('archive', 'PagesController@getArchive')->name('posts.archive');

// Authentication Routes

// Model Routes
Route::resource('posts', 'PostController');

// Slugs
Route::get('/p/{slug}', 'SlugController@getPostBySlug')->name('posts.single')->where('slug', '[\w\d\-\_]+');


Auth::routes();