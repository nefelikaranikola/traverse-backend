<?php

use Illuminate\Support\Facades\Route;

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

//welcome blade is not inside another folder
Route::get('/', 'PagesController@index');

//about page etc are inside a parent folder so we need to specify the path, we can use pages.path instead of pages/path
/*Route::get('/about', function() {
    return view('pages.about');
});*/

Route::get('/about', 'PagesController@about');
Route::get('/support', 'PagesController@support');
Route::get('/guides', 'PagesController@guides');
Route::get('/recomended', 'PagesController@recomended');
Route::get('/agencies', 'PagesController@agencies');