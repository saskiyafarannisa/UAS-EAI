<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\ResepController;
use App\Http\Controllers\VerifikasiController;
use App\Http\Controllers\PenyediaController;
use App\Http\Controllers\KonsultasiController;
use App\Http\Controllers\PelaporanController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::prefix('/apoteker')->group(function () {
Route::get('/obat', [ObatController::class, 'index']);
Route::post('/obat', [ObatController::class, 'store']);

Route::get('/resep/{id_resep}', [ResepController::class, 'show']);

Route::get('/verif/{id_resep}', [VerifikasiController::class, 'show']);

Route::post('/provide_obat/{id_resep}', [PenyediaController::class, 'store']);

Route::get('/konsul/{id_pasien}', [KonsultasiController::class, 'show']);

Route::get('/reporting', [PelaporanController::class, 'index']);
Route::post('/reporting', [PelaporanController::class, 'store']);

});