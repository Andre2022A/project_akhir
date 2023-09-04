<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DetailTransaksiController;
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
    return view('Login.Login');
});
Route::get('/d', function () {
    return view('dinamis');
});

Route::get('/login', [LoginController::class,'halamanlogin'])->name('login');
Route::POST('/postlogin', [LoginController::class,'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class,'logout'])->name('logout');
Route::group(['middleware' => ['auth']],function(){
    Route::get('/admin', [AdminController::class, 'index']);
});


Route::get('/admin', [AdminController::class,'index']);
Route::get('/admin/tambah', [AdminController::class,'tambah']);
Route::POST('/admin/simpan', [AdminController::class,'simpan']);
Route::get('/admin/hapus/{id}', [AdminController::class,'hapus']);
Route::get('/admin/ubah/{id}', [AdminController::class,'ubah']);
Route::put('/admin/update/{id}', [AdminController::class,'update']);

Route::get('/barang', [BarangController::class,'index']);
Route::get('/barang/tambah', [BarangController::class,'tambah']);
Route::POST('/barang/simpan', [BarangController::class,'simpan']);
Route::get('/barang/hapus/{id}', [BarangController::class,'hapus']);
Route::get('/barang/ubah/{id}', [BarangController::class,'ubah']);
Route::put('/barang/update/{id}', [BarangController::class,'update']);

Route::get('/kategori', [KategoriController::class,'index']);
Route::get('/kategori/tambah', [KategoriController::class,'tambah']);
Route::POST('/kategori/simpan', [KategoriController::class,'simpan']);
Route::get('/kategori/hapus/{id}', [KategoriController::class,'hapus']);
Route::get('/kategori/ubah/{id}', [KategoriController::class,'ubah']);
Route::put('/kategori/update/{id}', [KategoriController::class,'update']);

Route::get('/supplier', [SupplierController::class,'index']);
Route::get('/supplier/tambah', [SupplierController::class,'tambah']);
Route::POST('/supplier/simpan', [SupplierController::class,'simpan']);
Route::get('/supplier/hapus/{id}', [SupplierController::class,'hapus']);
Route::get('/supplier/ubah/{id}', [SupplierController::class,'ubah']);
Route::put('/supplier/update/{id}', [SupplierController::class,'update']);

Route::get('/transaksi', [TransaksiController::class,'index']);
Route::get('/transaksi/tambah', [TransaksiController::class,'tambah']);
Route::POST('/transaksi/simpan', [TransaksiController::class,'simpan']);
Route::get('/transaksi/hapus/{id}', [TransaksiController::class,'hapus']);
Route::get('/transaksi/ubah/{id}', [TransaksiController::class,'ubah']);
Route::put('/transaksi/update/{id}', [TransaksiController::class,'update']);
Route::get('/transaksi/cetak', [TransaksiController::class,'cetak']);

Route::get('/detail_transaksi/detail/{id}', [DetailtransaksiController::class,'index']);
Route::get('/detail_transaksi/hapus/{id}', [DetailTransaksiController::class,'hapus']);
Route::get('/detail_transaksi/detail/detail_transaksi/ubah/{id}', [DetailTransaksiController::class,'ubah']);
Route::put('/detail_transaksi/update/{id}', [DetailTransaksiController::class,'update']);
Route::get('/detail_transaksi/cetak', [DetailTransaksiController::class,'cetak']);