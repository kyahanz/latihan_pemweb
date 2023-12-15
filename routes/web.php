<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
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


Route::get('/input', [BarangController::class, 'input']);
Route::post('/proses', [BarangController::class, 'proses']);
Route::get('/view_data', [BarangController::class, 'view_data']);
Route::get('/edit_data/{id}',[BarangController::class, 'edit']);
Route::put('/edit_data/proses/{id}', [BarangController::class, 'editProses']);
Route::delete('/hapus_data/proses/{id}', [BarangController::class, 'deleteProses']);