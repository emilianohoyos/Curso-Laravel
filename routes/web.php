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

Route::get('/', 'InicioController@Index');
//Route::get('admin/permiso', 'Admin\PermisoController@Index')->name('permiso');

Route::group(['prefix'=>'admin','namespace'=>'Admin'], function(){
    Route::get('permiso', 'PermisoController@Index')->name('permiso');
    Route::get('permiso/crear', 'PermisoController@crear')->name('crear-permiso');
});





Route::get('user/{nombre}', 'PermisoController@index')->name('permiso');
Route::get('mail/send', 'MailController@send');

 