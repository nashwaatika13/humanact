<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DonasiController;
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
    return view('index', [
        "title" => "Beranda"
    ]);
});

Route::get('/contacts', function () {
    return view('contacts', [
        "title" => "Contacts"
    ]);
});

Route::get('/donasi', function () {
    return view('donasi', [
        "title" => "Donasi"
    ]);
});

Route::get('/transaksi', function () {
    return view('transaksi', [
        "title" => "Transaksi"
    ]);
});

Route::get('/tutup', function () {
    return view('tutup', [
        "title" => "Tutup"
    ]);
});

Route::get('/makasih', function () {
    return view('makasih', [
        "title" => "Makasih"
    ]);
});

//Route::resource('/contacts', ContactController::class);

Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts/store', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/donasi/create', [DonasiController::class, 'create'])->name('donasi.create');
Route::post('/donasi/store', [DonasiController::class, 'store'])->name('donasi.store');


Auth::routes();

Route::group(['middleware' => ['auth']], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/contacts/index', [ContactController::class, 'index'])->name('contacts.index');
    Route::get('/contacts/{id}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
    Route::post('/contacts/{id}/update', [ContactController::class, 'update'])->name('contacts.update');
    Route::get('/contacts/{id}/destroy', [ContactController::class, 'destroy'])->name('contacts.destroy');
    Route::get('/donasi/index', [DonasiController::class, 'index'])->name('donasi.index');
    Route::get('/donasi/{id}/edit', [DonasiController::class, 'edit'])->name('donasi.edit');
    Route::post('/donasi/{id}/update', [DonasiController::class, 'update'])->name('donasi.update');
    Route::get('/donasi/{id}/destroy', [DonasiController::class, 'destroy'])->name('donasi.destroy');
});

