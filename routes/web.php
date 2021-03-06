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

Route::get('inicio', function () {
    return view('inicio');
});

Route::get('principal',function(){
    return view(('principal'));
});


Route::group(['prefix' => 'admin', 'namespace'=>'Admin'], function() {
    
    Route::get('permiso','PermisoController@index')->name('permiso');
    Route::get('permiso/crear','PermisoController@create')->name('premiso_create');
    Route::get('menu','MenuController@index')->name('menu');
    Route::get('menu/crear','MenuController@create')->name('menu_crear');
    Route::post('menu','MenuController@store')->name('menu_guardar');
    
});

