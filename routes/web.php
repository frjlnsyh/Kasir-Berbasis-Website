<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
    return view('auth.login');
});

Auth::routes();


Route::get('users/home', [App\Http\Controllers\Users\HomeController::class, 'index'])->name('users.home')->middleware('is_users');
Route::get('users/profil', [App\Http\Controllers\Users\Utility\ProfilController::class, 'index'])->middleware('is_users');
Route::get('users/keranjang', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'index'])->middleware('is_users');
Route::post('users/tambah-keranjang', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'add'])->middleware('is_users');
Route::post('users/tambah-quantity', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'addQuantity'])->middleware('is_users');
Route::post('users/kurang-quantity', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'minQuantity'])->middleware('is_users');
Route::post('users/hapus-keranjang/{productId}', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'removeItem'])->middleware('is_users');
Route::get('users/histori-penjualan', [App\Http\Controllers\Users\Utility\HistoryController::class, 'index'])->middleware('is_users');
Route::get('users/search-histori', [App\Http\Controllers\Users\Utility\HistoryController::class, 'search'])->middleware('is_users');
Route::post('users/checkout', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'checkout'])->middleware('is_users');
Route::post('users/bill', [App\Http\Controllers\Users\Utility\KeranjangController::class, 'bill'])->middleware('is_users');
Route::post('users/pengeluaran-lainnya', [App\Http\Controllers\Users\Utility\PengeluaranController::class, 'addPengeluaran'])->middleware('is_users');

Route::get('admin/home', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('admin.home')->middleware('is_admin');

Route::get('admin/karyawan', [App\Http\Controllers\Admin\Utility\KaryawanController::class, 'index'])->name('admin.utility.karyawan')->middleware('is_admin');
Route::post('admin/tambah-karyawan', [App\Http\Controllers\Admin\Utility\KaryawanController::class, 'insert'])->name('admin.utility.karyawan')->middleware('is_admin');
Route::put('admin/edit-karyawan/{id}', [App\Http\Controllers\Admin\Utility\KaryawanController::class, 'update'])->name('karyawan.update')->middleware('is_admin');
Route::delete('admin/delete-karyawan/{id}', [App\Http\Controllers\Admin\Utility\KaryawanController::class, 'destroy'])->middleware('is_admin');

Route::get('admin/penjualan', [App\Http\Controllers\Admin\Utility\PenjualanController::class, 'index'])->name('admin.utility.penjualan')->middleware('is_admin');
Route::get('admin/search-penjualan', [App\Http\Controllers\Admin\Utility\PenjualanController::class, 'search'])->name('admin.utility.penjualan')->middleware('is_admin');
Route::get('admin/top-5', [App\Http\Controllers\Admin\Utility\Top5Controller::class, 'index'])->name('admin.utility.penjualan')->middleware('is_admin');
Route::get('admin/pengeluaran', [App\Http\Controllers\Admin\Utility\PengeluaranController::class, 'index'])->name('admin.utility.penjualan')->middleware('is_admin');
Route::get('admin/search-pengeluaran', [App\Http\Controllers\Admin\Utility\PengeluaranController::class, 'search'])->name('admin.utility.penjualan')->middleware('is_admin');

Route::get('admin/produk', [App\Http\Controllers\Admin\Produk\ProdukController::class, 'index'])->middleware('is_admin');
Route::post('admin/tambah-kategori', [App\Http\Controllers\Admin\Produk\ProdukController::class, 'tambahKate'])->middleware('is_admin');
Route::post('admin/tambah-produk', [App\Http\Controllers\Admin\Produk\ProdukController::class, 'tambahProd'])->middleware('is_admin');
Route::put('admin/edit-produk/{id}', [App\Http\Controllers\Admin\Produk\ProdukController::class, 'update'])->middleware('is_admin');
Route::delete('admin/delete-produk/{id}', [App\Http\Controllers\Admin\Produk\ProdukController::class, 'destroy'])->middleware('is_admin');
