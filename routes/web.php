<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/utama', function () {
    return view('utama');
});

 
Route::get('/input', 'App\Http\Controllers\BarangController@input');

Route::post('/proses', 'App\Http\Controllers\BarangController@proses');