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

// Route::get('/', function () {
//     return view('mainpage');
// });

Route::get('/','ApiController@indexjual');
Route::get('/pembayaran','ApiController@indexbayar');
Route::get('/piutang','ApiController@indexpiutang');