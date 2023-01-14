<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    Surat_Menduduki_Jabatan\IndexSMJController,
    Surat_Mengundurkan_Diri\IndexSMIController
};

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

Route::get('/', function () {
    return view('welcome');
});

/**
 * Surat Menduduki Jabatan
 */
Route::resource('SuratMendudukiJabatan', IndexSMJController::class);
Route::get('SuratMendudukiJabatan/success/{id}', [IndexSMJController::class, 'success'])->name('SuratMendudukiJabatan.success');

/**
 * Surat Pengunduran Diri
 */
Route::resource('SuratPengunduranDiri', IndexSMIController::class);
Route::get('SuratPengunduranDiri/success/{id}', [IndexSMIController::class, 'success'])->name('SuratPengunduranDiri.success');

