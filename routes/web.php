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

Route::get('/', 'PagesController@inicio')->name('inicio');
Route::get('/detalle/{id}', 'PagesController@detalle')->name('notas.detalle');
Route::post('/', 'PagesController@crear')->name('notas.crear');
Route::get('/editar/{id}', 'PagesController@editar')->name('notas.editar');
Route::put('/editar/{id}', 'PagesController@update')->name('notas.update');
Route::delete('/eliminar/{id}', 'PagesController@eliminar')->name('notas.eliminar');

Route::get('/fotos', 'PagesController@fotos')->name('foto');

Route::get('/noticias', 'PagesController@noticias')->name('noticias');

Route::get('/nosotros/{nombre?}', 'PagesController@nosotros')->name('nosotros');

/*Route::get('fotos/{numero?}', function($numero='sin número'){
    return 'Estás en la galería de fotos:'." ".$numero;
})->where('numero', '[0-9]+');

Route::view('galeria', 'fotos', ['numero'=> 125]);*/