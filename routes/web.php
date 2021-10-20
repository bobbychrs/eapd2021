<?php
//controller wilayah//
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaitestController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\SudinSelatan;
use App\Http\Controllers\KebLamaController;
use App\Http\Controllers\KebBaruController;
use App\Http\Controllers\MprapatanController;
use App\Http\Controllers\PesanggrahanController;
use App\Http\Controllers\CilandakController;
use App\Http\Controllers\TebetController;
use App\Http\Controllers\SetiaBudiController;
use App\Http\Controllers\PancoranController;
use App\Http\Controllers\PsmingguController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DetailAnggotaController;
use App\Http\Controllers\VerifikasiController;

//controller dinas//
use App\Http\Controllers\DashDinasController;
use App\Http\Controllers\WselatanController;
use App\Http\Controllers\TambahApdController;
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

// Admin Wilayah //
Route::get('/', [DashboardController::class, 'index']);
// Route::get('/sudinselatan/', [DashboardController::class, 'index']);
Route::get('/sudinselatan', [SudinSelatan::class, 'index']);
Route::get('/sudinselatan/detail/{NRK}', [PegawaiController::class, 'detail']);
Route::get('/sudinselatan/keblama', [KebLamaController::class, 'index']);
Route::get('/sudinselatan/kebbaru', [KebBaruController::class, 'index']);
Route::get('/sudinselatan/mprapatan', [MprapatanController::class, 'index']);
Route::get('/sudinselatan/pesanggrahan', [PesanggrahanController::class, 'index']);
Route::get('/sudinselatan/cilandak', [CilandakController::class, 'index']);
Route::get('/sudinselatan/tebet', [TebetController::class, 'index']);
Route::get('/sudinselatan/setiabudi', [SetiaBudiController::class, 'index']);
Route::get('/sudinselatan/pancoran', [PancoranController::class, 'index']);
Route::get('/sudinselatan/pasminggu', [PsmingguController::class, 'index']);
Route::get('/profile', [ProfileController::class, 'index']);
Route::get('/pegawai', [PegawaiController::class, 'index'])->name('pegawai');
Route::get('/pegawai/create', [PegawaiController::class, 'create']);
Route::post('/store',[PegawaiController::class, 'store']);
Route::get('/verifikasi', [VerifikasiController::class, 'index']);
Route::get('/lihat-pegawai', 'PegawaitestController@index')->name('lihat-pegawai');
Route::get('/tambah-pegawai', 'PegawaitestController@create')->name('tambah-pegawai');
Route::post('/simpan-pegawai', 'PegawaitestController@store')->name('simpan-pegawai');

// Admin Dinas //
Route::get('/dash-dinas', [DashDinasController::class, 'index']);
Route::get('/dash-dinas/wilayah/{kode_wilayah}', [DashDinasController::class, 'detail']);
Route::get('/lihat-apd', 'TambahApdController@index')->name('lihat-apd');
Route::get('/tambah-apd', 'TambahApdController@create')->name('tambah-apd');
Route::post('/simpan-apd', 'TambahApdController@store')->name('simpan-apd');
