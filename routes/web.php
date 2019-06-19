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

//Route::get('/admin', 'AdminController@content');

Route::get('/admin', 'DetailtiketController@detail');

Route::post('/detailAction','DetailtiketController@add_Detail');

Route::get('/admin/hapus/{id}','DetailtiketController@delete_Detail');

Route::get('/admin/edit/{id}','DetailtiketController@edit_Detail');

Route::get('/admin/pegawai', 'PegawaiController@pegawai');

/* P U N Y A  D E S I

Route::post('/admin/detail/update','DetailtiketController@update');

*/