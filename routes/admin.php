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

Route::resource('/test', 'testController');
Route::resource('/dashboard', 'admin\AdminstratorController')->middleware('auth');
Route::resource('/tex', 'admin\TexesInfoController');
Route::resource('/supplier', 'admin\SupplierController');
Route::resource('/ore', 'admin\OreController');
Route::resource('/cutting', 'admin\CuttingController');
Route::resource('/dress', 'admin\DressController');
Route::resource('/journal', 'admin\JournalController');
Route::resource('/office', 'admin\OfficeController');
Route::resource('/OfficeInvoice', 'admin\OfficeInvoiceController');
Route::resource('/OfficeAccounts', 'admin\OfficeAccountsController');
Route::resource('/retrieved', 'admin\RetrievedController');
Route::get('/clients/register','admin\ClientController@clientRegister')->name('client-register-form');
Route::post('/clients/register','admin\ClientController@createClientRegister')->name('client-register');
Route::get('/clients/login','admin\ClientController@clientLogin')->name('client-login-form');
Route::post('/clients/login','admin\ClientController@createClientLogin')->name('client-login');
Route::resource('/clients', 'admin\ClientController');





