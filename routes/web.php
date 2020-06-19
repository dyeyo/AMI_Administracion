<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contrato', 'ContractController@contract')->name('contract');

Route::post('/contrato_pago', 'ContractController@contractPay')->name('contractPay');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::post('/envio_pago', 'HomeController@sendinfopay')->name('sendinfopay');
  //EMIALS
  Route::get('/correos', 'EmailsController@index')->name('emails');
  Route::get('/editar_plantilla/{id}', 'EmailsController@editPlantilla')->name('editPlantilla');
  Route::put('/actualziar_plantilla/{id}', 'EmailsController@updatePlantilla')->name('updatePlantilla');

  //CLIENTES
  Route::put('/pago/{id}', 'HomeController@paySuccess')->name('paySuccess');

  //CONTRATOS
  Route::get('/contratos', 'ContractController@index')->name('contracs');
  Route::post('/contratos/crear', 'ContractController@store')->name('contracsStore');
  Route::get('/contrato/{id}', 'ContractController@editContract')->name('editContract');
  Route::put('/contrato/editar/{id}', 'ContractController@updateContract')->name('updateContract');

});



