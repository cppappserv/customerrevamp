<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('/userlogin', 'LoginmobController@userlogin');
Route::post('/userlogout', 'LoginmobController@userlogout');
Route::post('/jadwalpanen', 'JadwalpanenController@jadwalpanen');

Route::post('/inputregisterpanen', 'InputpanenController@inputpanen');
Route::post('/inputpetugastimbang', 'InputpanenController@update01_petugastimbang');
Route::post('/inputjambongkar', 'InputpanenController@update02_jambongkar');
Route::post('/inputjamselesai', 'InputpanenController@update03_jamselesai');
Route::post('/inputjamproses', 'InputpanenController@update04_proses');
Route::post('/inputjamselesaiproses', 'InputpanenController@update05_selesaiproses');

Route::post('/inputtonase', 'InputpenerimaanController@keranjang');
Route::post('/tonasedelete', 'InputpenerimaanController@delkeranjang');
Route::post('/displaytonase', 'InputpenerimaanController@displaytonase');
Route::post('/inputsampling10', 'InputsamplingController@sampling');
Route::post('/sampling10delete', 'InputsamplingController@delsampling');
Route::post('/inputcategorytonase', 'InputsamplingController@tonase');
Route::post('/inputgrade', 'InputsamplingController@grade');
Route::post('/savedata', 'InputsamplingController@savedata');
Route::post('/inputdelete', 'InputsamplingController@dibatalkan');
Route::post('/displayhasilinput', 'InputsamplingController@displayhasilinput');
Route::post('/displayselesaiapprove', 'InputsamplingController@displayselesaiapprove');
Route::post('/inputapprove', 'InputsamplingController@diapprove');
Route::post('/loadinputpanen', 'InputsamplingController@loadinputpanen');
Route::post('/loadkeranjang', 'InputsamplingController@loadkeranjang');

Route::post('/tabelsatuanblong', 'TabelController@satuanblong');
Route::post('/tabelmesintimbang', 'TabelController@mesintimbang');
Route::post('/tabelpenimbang', 'TabelController@penimbang');
Route::post('/tabelgrade', 'TabelController@grade');
Route::post('/tabelcondition', 'TabelController@condition');


