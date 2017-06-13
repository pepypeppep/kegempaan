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
Route::get('/', 'HomeController@index');
Route::get('tambah_data', 'HomeController@tambahData');

Route::get('importExport', 'MaatwebsiteDemoController@importExport');
Route::get('downloadExcel/{type}', 'MaatwebsiteDemoController@downloadExcel');
Route::get('exportPDF', 'MaatwebsiteDemoController@exportPDF');
Route::post('importExcel', 'MaatwebsiteDemoController@importExcel');
Route::get('pdfview',array('as'=>'pdfview','uses'=>'MaatwebsiteDemoController@pdfview'));

//Route::get('/items', 'ItemController@view_items');


/*
Route::get('/', function () {
    return view('welcome');
});
*/