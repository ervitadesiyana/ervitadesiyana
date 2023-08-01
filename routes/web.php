<?php

use App\Http\Controllers\BarangController;
use App\Http\Controllers\HomeControllerDesi;
use App\Http\Controllers\JenisbarangConttrollerDesi;
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
Route::get('/', [HomeControllerDesi::class, 'index'])->name('home');
Route::get('/jenisbarang', [JenisbarangConttrollerDesi::class, 'index'])->name('j_barang');
Route::get('/edit_jenisbarang', [JenisbarangConttrollerDesi::class, 'edit'])->name('edit_jbarang');
Route::get('/hapus_jbarang/{j_barang}', [JenisbarangConttrollerDesi::class, 'destroy'])->name('delete_jbarang');
Route::get('/tambah_jenisbarang', [JenisbarangConttrollerDesi::class, 'create'])->name('tambah_jenisbarang');
Route::PUT('/simpan_jbarang', [JenisbarangConttrollerDesi::class, 'store'])->name('simpan_jbarang');

Route::get('/barang', [BarangController::class, 'index'])->name('barang');
Route::get('/tambahbarang', [BarangController::class, 'create'])->name('tambahbarang');
Route::PUT('/simpan_barang', [BarangController::class, 'store'])->name('simpan_barang');
Route::get('/edit_barang/{barang}', [BarangController::class, 'edit'])->name('edit_barang');
Route::PATCH('/update_barang', [BarangController::class, 'update'])->name('update_barang');
Route::get('/deletebarang/{barang}', [BarangController::class, 'destroy'])->name('deletebarang');