<?php

use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contrato_cuotas', 'ContractController@contractfees')->name('contractfees');
Route::get('/contrato_contado', 'ContractController@contract')->name('contract');
Route::get('/contrato1600', 'ContractController@contract1600')->name('contract1600');

Route::post('/contrato_pago', 'ContractController@contractPay')->name('contractPay');

Auth::routes();
Route::group(['middleware' => ['auth']], function () {
  Route::get('/home', 'HomeController@index')->name('home');
  Route::post('/envio_pago', 'HomeController@sendinfopay')->name('sendinfopay');
  //EMIALS
  Route::get('/correos', 'EmailsController@index')->name('emails');
  Route::get('/editar_plantilla/{id}', 'EmailsController@editPlantilla')->name('editPlantilla');
  Route::put('/actualziar_plantilla/{id}', 'EmailsController@updatePlantilla')->name('updatePlantilla');
});



