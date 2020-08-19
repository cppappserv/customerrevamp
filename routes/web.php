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
Auth::routes(['register' => false]);
Route::get('/logout', 'HomeController@logout');
// Route::get('/', 'HomeController@index')->name('home');
// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/dashboard1', 'NewController@index')->name('home1');
Route::get('/company1/{id}', 'NewController@company')->name('company1');
Route::get('/subcompany1/{id}/{id2}', 'NewController@subcompany')->name('subcompany1');
Route::delete('applicant_delete_modal', 'NewController@destroy')->name('applicant_delete');
Route::get('/detail1/{id}/{id2}/{id3}', 'NewController@detail')->name('detail');


Route::post('/detailsave/{id}', 'NewController@detailsave')->name('detailsave');


Route::get('/storeimage/{id}', 'NewController@storeimage')->name('storeimage');

Route::get('/detail1/update/{id}', 'NewController@update')->name('update');

Route::delete('applicant_delete_modal', 'NewController@destroy')->name('applicant_delete');
Route::get('/setting1', 'NewController@setting')->name('setting1');
Route::get('/upload1', 'NewController@upload')->name('upload');
Route::post('/uploadexcel', 'NewController@uploadexcel')->name('uploadexcel');



Route::get('/info1', 'NewController@info')->name('info1');
Route::post('/info1edit/save', 'NewController@infosave')->name('infosave');
Route::get('autocomplete', 'NewController@search');
Route::get('autohubkelga', 'NewController@searchhubkelga');
Route::get("/getmsg/{id}/{id2}/{id3}/{id4}/{id5}/{id6}","NewAddController@jaminan");
Route::get("/getmsg2/{id}/{id2}/{id3}/{id4}/{id5}/{id6}","NewAddController@assetpribadi");
Route::get("/getmsg3/{id}/{id2}","NewAddController@inputinfomasi");
Route::get("/getmsg4","NewAddController@inputinfomasinew");
Route::get('/getmsg5/{id}', 'NewAddController@getcompany');
Route::get("/addmore","ArrayController@addMore");
Route::post("/addmore","ArrayController@addMorePost"); 
 


// Route::get('/setuser', 'Menus\SetuserController@index')->name('Setuser_view');
// Route::get('/setuser/add', 'Menus\SetuserController@add');
// Route::post('/setuser/save', 'Menus\SetuserController@save');
// Route::get('/setuser/delete/{id}', 'Menus\SetuserController@delete');
// Route::get('/setuser/edit/{id}', 'Menus\SetuserController@edit');
// Route::put('/setuser/update/{id}', 'Menus\SetuserController@update');
// Route::get('/setuser/reset/{id}', 'Menus\SetuserController@reset');
// Route::put('/setuser/updatepass/{id}', 'Menus\SetuserController@updatepass');
// Route::get('/setuser/filter', 'Menus\SetuserController@filter');


// Route::get('/company', 'Menus\CompanyController@index')->name('company_view');
// Route::get('/company/add', 'Menus\CompanyController@add');
// Route::post('/company/save', 'Menus\CompanyController@save');
// Route::get('/company/delete/{id}', 'Menus\CompanyController@delete');
// Route::get('/company/edit/{id}', 'Menus\CompanyController@edit');
// Route::put('/company/update/{id}', 'Menus\CompanyController@update');
// Route::get('/company/storeimage/{id}', 'Menus\CompanyController@storeimage');

// Route::get('/plant', 'Menus\PlantController@index')->name('plant_view');
// Route::get('/plant/add', 'Menus\PlantController@add');
// Route::post('/plant/save', 'Menus\PlantController@save');
// Route::get('/plant/delete/{id}', 'Menus\PlantController@delete');
// Route::get('/plant/edit/{id}', 'Menus\PlantController@edit');
// Route::put('/plant/update/{id}', 'Menus\PlantController@update');
// Route::get('/plant/export_excel', 'Menus\PlantController@export_excel');
// Route::post('/plant/import_excel', 'Menus\PlantController@import_excel');
// Route::get('/plant/filter', 'Menus\PlantController@filter');

// Route::get('/otorisasiweb', 'Menus\OtorisasiwebController@index')->name('otorisasiweb_view');
// Route::get('/otorisasiweb/add', 'Menus\OtorisasiwebController@add');
// Route::post('/otorisasiweb/save', 'Menus\OtorisasiwebController@save');
// Route::get('/otorisasiweb/delete/{id}', 'Menus\OtorisasiwebController@delete');
// Route::get('/otorisasiweb/edit/{id}', 'Menus\OtorisasiwebController@edit');
// Route::put('/otorisasiweb/update/{id}', 'Menus\OtorisasiwebController@update');
// Route::get('/otorisasiweb/filter', 'Menus\OtorisasiwebController@filter');
// Route::get('/otorisasiweb/reset/{id}', 'Menus\OtorisasiwebController@resetpass');
// Route::put('/otorisasiweb/resetupdate/{id}', 'Menus\OtorisasiwebController@resetupdate');

Route::get('redirect/{driver}', 'Auth\LoginController@redirectToProvider')->name('login.provider');
Route::get('{driver}/callback', 'Auth\LoginController@handleProviderCallback')->name('login.callback');

