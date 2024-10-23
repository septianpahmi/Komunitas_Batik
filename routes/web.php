<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KatalogController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\TeamController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
//about
Route::get('/about/dahlia', [AboutController::class, 'dahlia'])->name('about.dahlia');
Route::get('/about/rajava', [AboutController::class, 'rajava'])->name('about.rajava');
Route::get('/about/viena', [AboutController::class, 'viena'])->name('about.viena');
//katalog
Route::get('/katalog', [KatalogController::class, 'index'])->name('katalog');


Route::group(['middleware' => ['auth']], function () {
    Route::get('/m/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    //Profile
    Route::get('/m/edit-profil/{id}', [ProfilController::class, 'index'])->name('profil');
    Route::post('/m/edit-profil/profil-update/{id}', [ProfilController::class, 'profilUpdate'])->name('profil.update');
    Route::post('/m/edit-profil/akun-update/{id}', [ProfilController::class, 'akunUpdate'])->name('akun.update');
    //galeri
    Route::get('/m/galeri', [GaleriController::class, 'index'])->name('galeri');
    Route::post('/m/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
    Route::get('/m/galeri/delete/{id}', [GaleriController::class, 'delete'])->name('galeri.delete');
    //galeri
    Route::get('/m/kegiatan', [KegiatanController::class, 'index'])->name('kegiatan');
    Route::post('/m/kegiatan/store', [KegiatanController::class, 'store'])->name('kegiatan.store');
    Route::get('/m/kegiatan/delete/{id}', [KegiatanController::class, 'delete'])->name('kegiatan.delete');
    //Team
    Route::get('/m/team', [TeamController::class, 'index'])->name('team');
    Route::post('/m/team/store', [TeamController::class, 'store'])->name('team.store');
    Route::post('/m/team/update/{id}', [TeamController::class, 'update'])->name('team.update');
    Route::get('/m/team/delete/{id}', [TeamController::class, 'delete'])->name('team.delete');
    //Team
    Route::get('/m/produk', [ProdukController::class, 'index'])->name('produk');
    Route::post('/m/produk/store', [ProdukController::class, 'store'])->name('produk.store');
    Route::post('/m/produk/update/{id}', [ProdukController::class, 'update'])->name('produk.update');
    Route::get('/m/produk/delete/{id}', [ProdukController::class, 'delete'])->name('produk.delete');
});
require __DIR__ . '/auth.php';
