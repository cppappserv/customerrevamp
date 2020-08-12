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

Route::get('/', function () {
    return view('welcome');
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard1', 'NewController@index')->name('home1');
Route::get('/dashboard', 'HomeController@index')->name('home');
Route::get('/company1/{id}', 'NewController@company')->name('company1');
Route::get('/company/{id}', 'HomeController@company')->name('company');
Route::get('/subcompany1/{id}/{id2}', 'NewController@subcompany')->name('subcompany');
Route::get('/subcompany/{id}/{id2}', 'HomeController@subcompany')->name('subcompany');
Route::get('/detail1/{id}/{id2}', 'NewController@detail')->name('detail');
Route::get('/detail/{id}/{id2}', 'HomeController@detail')->name('detail');
Route::get('/detaildelete/{id}', 'HomeController@detaildelete')->name('detaildelete');
Route::get('/datapribadi', 'HomeController@detail')->name('pribadi');
Route::get('/edit0101', 'HomeController@edit0101')->name('edit0101');



Route::get('/datausaha', 'HomeController@usaha')->name('usaha');
Route::get('/edit0201', 'HomeController@edit0201')->name('edit0201');

Route::get('/datakepemilikan', 'HomeController@kepemilikan')->name('kepemilikan');
Route::get('/edit0301', 'HomeController@edit0301')->name('edit0301');

Route::get('/datajaminan', 'HomeController@jaminan')->name('jaminan');
Route::get('/edit0401', 'HomeController@edit0401')->name('edit0401');

Route::get('/karakteristik', 'HomeController@karakteristik')->name('karakteristik');
Route::get('/edit0501', 'HomeController@edit0501')->name('edit0501');
Route::get('/edit0501upload', 'HomeController@edit0501upload')->name('edit0501upload');

Route::get('/setting', 'HomeController@setting')->name('setting');
Route::get('/setting1', 'NewController@setting')->name('setting1');
Route::get('/upload', 'HomeController@upload')->name('upload');
Route::get('/upload1', 'NewController@upload')->name('upload');
Route::get('/upload_history', 'HomeController@upload_history')->name('upload_history');
Route::get('/download', 'HomeController@download')->name('download');
Route::get('/syncronize', 'HomeController@syncronize')->name('syncronize');
Route::get('/info', 'HomeController@info')->name('info');
Route::get('/info1', 'NewController@info')->name('info');
Route::get('/infoedit', 'HomeController@infoedit')->name('infoedit');
Route::get('/logout', 'HomeController@logout')->name('logout');

Route::get('autocomplete', 'NewController@search');

// Route::get('search', 'AutoCompleteController@index');
//  Route::get('autocomplete', 'AutoCompleteController@search');

 
 
