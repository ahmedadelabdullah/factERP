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
Route::resource('/dashboard', 'admin\AdminstratorController');
Route::resource('/tex', 'admin\TexesInfoController');
Route::resource('/supplier', 'admin\SupplierController');




##### one to many #####