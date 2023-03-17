<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\PetugasController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SppController;
use App\Http\Controllers\TransaksiController;


Route::get('/spp', function () {
    return view('data_spp');
});



Route::get('/', [LoginController::class, 'login'])->name('login');
Route::post('actionlogin', [LoginController::class, 'actionlogin'])->name('actionlogin');

Route::get('home', [HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('actionlogout', [LoginController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');

//REGISTER
Route::get('register', [RegisterController::class, 'register'])->name('register');
Route::post('register/action', [RegisterController::class, 'actionregister'])->name('actionregister');

// Siswa
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/tambah_siswa', [SiswaController::class, 'tambah_siswa']);
Route::post('/input_siswa', [SiswaController::class, 'input_siswa']);
Route::get('/edit_siswa/{nis}', [SiswaController::class, 'edit_siswa']);
Route::post('/edit_siswa', [SiswaController::class, 'edit_siswa_simpan']);
Route::get('/hapus_siswa/{nis}', [SiswaController::class, 'hapus_siswa']);

// Petugas
Route::get('petugas', [PetugasController::class, 'petugas']);
Route::get('tambah_petugas', [PetugasController::class, 'tambah_petugas']);
Route::post('input_petugas', [PetugasController::class, 'input_petugas']);
Route::get('edit_petugas/{id_petugas}', [PetugasController::class, 'edit_petugas']);
Route::post('edit_petugas', [PetugasController::class, 'edit_petugas_simpan']);
Route::get('hapus_petugas/{id_petugas}', [PetugasController::class, 'hapus_petugas']);

// Kelas
Route::get('kelas', [KelasController::class, 'kelas']);
Route::get('/tambah_kelas', [KelasController::class, 'tambah_kelas']);
Route::post('/input_kelas', [KelasController::class, 'input_kelas']);
Route::get('/edit_kelas/{id_kelas}', [KelasController::class, 'edit_kelas']);
Route::post('/edit_kelas', [KelasController::class, 'edit_kelas_simpan']);
Route::get('/hapus_kelas/{id_kelas}', [KelasController::class, 'hapus_siswa']);

// Pembayaran
Route::get('transaksi', [TransaksiController::class, 'transaksi']);
Route::get('tambah_transaksi', [TransaksiController::class, 'tambah_transaksi']);
Route::post('tambah_transaksi', [TransaksiController::class, 'input_transaksi']);

Route::get('spp', [SppController::class, 'spp']);
Route::get('/tambah_spp', [SppController::class, 'tambah_spp']);
Route::post('/input_spp', [SppController::class, 'input_spp']);
Route::get('/edit_spp/{id_spp}', [SppController::class, 'edit_spp']);
Route::post('/edit_spp', [SppController::class, 'edit_spp_simpan']);
Route::get('/hapus_spp/{id_spp}', [SppController::class, 'hapus_spp']);

Route::get('/tes', function(){
    return view('tes');
});
Route::post('/laporan', [TransaksiController::class, 'generate_laporan']);
