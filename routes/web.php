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
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});



//GALLERY
Route::any('/gallery','GalleryController@index')->name('gallery.index');
Route::get('gallery/img/{id}','GalleryController@images')->name('');
Route::any('/gallery/create' , 'GalleryController@create')->name('gallery.create');
Route::any('/album' , 'ImageController@index')->name('album');
Route::any('/store','GalleryController@store')->name('store');

//ARTICLES
Route::any('/article-create','ArticlesController@create')->name('article-form');
Route::any('/article-store','ArticlesController@store')->name('article-store');
Route::any('/article-show/{id}','ArticlesController@show')->name('article-show');
Route::any('/article-index','ArticlesController@index')->name('article-index');


//Multiple Image Upload
Route::any('/imageCreate/{id}', 'ImageController@create')->name('imageCreate');
Route::any('/imageStore/{id}', 'ImageController@uploadFiles')->name('imageStore');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['middleware'=>['auth']],function (){
    Route::any('/article-create','ArticlesController@create')->name('article-form');

});
