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

/*
Route::get('/', function () {
    return view('welcome');
});
*/
// create new file in resources/views/(create new page ex.pages)/ mypage.blade.php

Route::get('/mypage',function()
{
    return view('pages.mypage'); // views/pages/mypage.blade.php
});


Route::get('/','PagesController@index');


Route::get('/about','PagesController@about');

Route::get('/services','PagesController@services');

Route::resource('posts','PostController');






