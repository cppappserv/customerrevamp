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

Auth::routes(['register' => true]);
Route::get('/logout', 'HomeController@logout')->name('logout');
Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/geolocation/{id}/{id2}', 'HomeController@geolocation')->name('geolocation');

Route::get('/company1/{id}', 'CstcompanyController@index')->name('company1');

Route::get('/subcompany1/{id}/{id2}', 'CstsubcompanyController@index')->name('subcompany1');

Route::delete('applicant_delete_modal', 'CstdetailController@destroy')->name('applicant_delete');
Route::get('/detail1/{id}/{id2}/{id3}/{id4}', 'CstdetailController@index')->name('detail');
Route::get('/detail2/{id}/{id2}/{id3}/{id4}', 'CstdetailController@edit')->name('edit');

Route::post('/detailsave/{id}', 'CstdetailController@detailsave')->name('detailsave');
Route::post('/load_tipebadanhukum', 'CstdetailController@load_tipebadanhukum');
Route::get('/load_tipebadanhukum', 'CstdetailController@load_tipebadanhukum');
Route::post('/load_zsap', 'CstdetailController@load_zsap');
Route::get('/load_zsap', 'CstdetailController@load_zsap');


Route::get('/storeimage/{id}', 'CstdetailController@storeimage')->name('storeimage');
Route::get('/storeimageadd/{id}', 'CstdetailController@storeimageother')->name('storeimage');

Route::get('/detail1/update/{id}', 'CstdetailController@update')->name('update');


Route::get('/setting1', 'CstsettingController@index')->name('setting1');
Route::post('/export_excel', 'CstsettingController@export_excel')->name('export_excel');

Route::get('/upload1', 'CstuploadController@index')->name('upload');
Route::post('/uploadexcel', 'CstuploadController@uploadexcel')->name('uploadexcel');
Route::post('/prosesdata', 'CstuploadController@prosesexcel')->name('prosesexcel');

Route::get('/download', 'CstuploadController@index')->name('download');




Route::get('/info1', 'CstinformasiController@index')->name('info1');
Route::post('/info1edit/save', 'CstinformasiController@infosave')->name('infosave');
Route::delete('/info1_delete_modal', 'CstinformasiController@destroy')->name('info_delete');
Route::get('autocomplete', 'CstdetailController@search');
Route::get('autohubkelga', 'CstdetailController@searchhubkelga');
Route::get("/getmsg/{id}/{id2}/{id3}/{id4}/{id5}/{id6}","NewAddController@jaminan");
Route::get("/getmsg2/{id}/{id2}/{id3}/{id4}/{id5}/{id6}","NewAddController@assetpribadi");
Route::get("/getmsg3/{id}/{id2}/{id3}","NewAddController@inputinfomasi");
Route::get("/getmsg4","NewAddController@inputinfomasinew");
Route::get('/getmsg5/{id}', 'NewAddController@getcompany');
Route::get('/getmsg6/{id}', 'NewAddController@cekuserid');
Route::get('/getrec/{id}', 'NewAddController@getrec');



Route::get("/addmore","ArrayController@addMore");
Route::post("/addmore","ArrayController@addMorePost"); 

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');