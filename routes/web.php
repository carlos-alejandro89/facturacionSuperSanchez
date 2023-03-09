<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'solicitudFacturaController@index');
Route::get('testApi','consultaFacturaController@escribeMensajeSIFOL');

Route::group(["prefix"=>'autofactura'],function(){
  Route::post('getUsoCFDI','solicitudFacturaController@getUsoCFDI');
  Route::post('solicitaCFDI','solicitudFacturaController@solicitaCFDI');
  Route::post('ticket/validar','solicitudFacturaController@validarTicket');
  Route::post('tae/validar','facturacionTaeController@validarTae');
  Route::post('tae/generar-factura','facturacionTaeController@generarFactura');
  Route::post('clientes/get-info','clientesController@getInfo');
});

Route::group(["prefix" => 'cfdi'], function(){
    Route::get('consulta','consultaFacturaController@index')->name('consulta-cfdi');
    Route::get('home','consultaFacturaController@home')->middleware('panel-cfdi');
    Route::post('consulta','consultaFacturaController@getInvoices')->name('get-invoices');
    Route::get('support/{uniqid}',array('as' => 'uniqid', 'uses'=> 'consultaFacturaController@supportCfdi'))->middleware('panel-cfdi');
    Route::get('files/{type}/{uniqid}',array('as' => 'type','as' => 'uniqid', 'uses'=> 'consultaFacturaController@downloadFile'));
    Route::post('support/sendmessage','consultaFacturaController@supportMessage');
});

Auth::routes();

Route::group(["prefix"=>"accounts"],function(){
  Route::post('sign-in','accountsController@signIn');
  Route::post('sign-validate','accountsController@signValidate');
  Route::get('logout','accountsController@logout')->name('manager-logout');
});

Route::get('manager/sign-in/access','managerController@accessView');

Route::group(["prefix"=>"manager","middleware" => "manager"],function(){
  Route::get('main','managerController@index')->name('home');
  Route::get('cfdi/{uniqid}', array('as' => 'uniqid', 'uses'=> 'managerController@informacionCfdi'));
  Route::post('cfdi/declinarSolicitud','managerController@declinarSolicitud');
  Route::post('cfdi/confirmar-operacion','managerController@confirmarFacturacion');
  Route::post('cfdi/enviar-archivos','managerController@enviarArchivos');

  Route::get('history','managerController@history')->name('history');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);
