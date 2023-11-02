<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

//Route::get('/hola_crud/{nombre}', 'HolaController@show');
/*example 7 rutas estandar
Route::get('product', 'ProductController@index')->name('product.index');
Route::get('product/{product}', 'ProductController@show')->name('product.show');
Route::get('product/create', 'ProductController@create')->name('product.create');
Route::post('product/{product}', 'ProductController@store')->name('product.store');
Route::get('product/{product}/edit', 'ProductController@edit')->name('product.edit');
Route::patch('product/{product}', 'ProductController@update')->name('product.update');
Route::delete('product/{product}', 'ProductController@destroy')->name('product.destroy');*/
// 7 rutas estandar
Route::resource('products', 'ProductController');
//
// Añadimos una ruta NO ESTÁNDAR para borrar productos mediante GET
Route::get('product/delete/{product}', 'ProductController@destroy')->name('product.myDestroy');
