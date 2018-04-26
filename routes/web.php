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

Auth::routes();

Route::group(['prefix' => 'admin','middleware' => ['auth','role:admin']], function(){
	
	Route::resource('asientos', 'AsientosController');
	Route::get('asientos/{id}/destroy', [
		'uses' => 'AsientosController@destroy',
		'as'   => 'asientos.destroy'
	]);

	Route::resource('funciones', 'FuncionesController');
	Route::get('funciones/{id}/destroy', [
		'uses' => 'FuncionesController@destroy',
		'as'   => 'funciones.destroy'
	]);

	Route::resource('reservas', 'ReservasController');
	Route::get('reservas/{id}/destroy', [
		'uses' => 'ReservasController@destroy',
		'as'   => 'reservas.destroy'
	]);


});

Route::group(['prefix' => 'front','middleware' => ['auth','role:user']], function(){

	Route::resource('main', 'Front\FrontController');
	Route::get('asientos/{id}/index', [
		'uses' => 'Front\FrontController@asientos',
		'as'   => 'asientos'
	]);
	/*Route::get('asientos/asientos_store', [
		'uses' => 'Front\FrontController@asientos_store',
		'as'   => 'asientos.store'
	]);*/
});



Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
/*Route::get('admin/funciones', 'FuncionesController@index')->middleware('auth','role:admin');
Route::get('admin/funciones/create', 'FuncionesController@create')->middleware('auth','role:admin');
*/	

/*Route::put('post/{id}', function ($id) {
    return "llego";
})->middleware('auth', 'role:admin');*/
