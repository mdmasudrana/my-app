<?php


Route::get('/', function () {
    
    return view('welcome');
});





Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/contact', 'ContactController@contactus')->name('contactus');
Route::post('/contact', 'ContactController@store')->name('contactus');

Route::get('/news', 'NewsController@index')->name('news');
Route::post('/news', 'NewsController@store')->name('news');
Route::get('/newsdelete/{id}', 'NewsController@newsdelete')->name('delete');
Route::get('/newsdetails/{id}', 'NewsController@show')->name('show');
Route::get('/newsedit/{id}', 'NewsController@edit')->name('edit');
Route::get('/update/{id}', 'NewsController@store')->name('update');




Route::get('/newsview', 'NewsviewController@index')->name('newsview');
Route::post('/newsview', 'NewsviewController@store')->name('newsview');

Route::get('image-upload', 'ImageUploadController@imageUpload')->name('image.upload');
Route::post('image-upload', 'ImageUploadController@imageUploadPost')->name('image.upload.post');

Route::get('/about', 'AboutController@index')->name('aboutus');
Route::post('/about', 'AboutController@store')->name('aboutus');

Route::get('/more', 'MoreController@index')->name('more');
Route::post('/more', 'MoreController@store')->name('more');

Route::get('insert','StudInsertController@insertform');
Route::post('create','StudInsertController@insert');