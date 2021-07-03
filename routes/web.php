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


Auth::routes();


Route::get('/', 'HomeController@index')->name('index');
Route::get('/home', 'HomeController@test')->name('home');
Route::get('/plan-de-vol/list', 'PlanDeVolController@list')->name('plan-de-vol-list');
Route::get('/dossier-meteo/list', 'DossierMeteoController@list')->name('dossier-meteo-list');
Route::get('/dossier-de-vol/list', 'DossierDeVolController@list')->name('dossier-de-vol-list');
Route::get('/facturation/list', 'FacturationController@list')->name('facturation-list');
Route::get('/bip/list', 'BipController@list')->name('bip-list');
Route::get('/plan-de-vol/form', 'PlanDeVolController@form')->name('plan-de-vol-form');
Route::get('/facturation/form', 'FacturationController@form')->name('facturation');

// uSER MANAGEMENT ROUTES
Route::get('/user-management/list', 'UserManagementController@list')->name('user-management');
Route::get('/user-management/form', 'UserManagementController@form')->name('user-management-form');


Route::post('/plan-de-vol/form/add', 'PlanDeVolController@add')->name('plan-de-vol-add');


Route::get('paywithpaypal', array('as' => 'paywithpaypal','uses' => 'PaypalController@payWithPaypal',));
Route::post('paypal', array('as' => 'paypal','uses' => 'PaypalController@postPaymentWithpaypal',));
Route::get('paypal', array('as' => 'status','uses' => 'PaypalController@getPaymentStatus',));
