<?php

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

Route::get('/', function () {
    return view('home');
});

Route::get('/mhs', function () {
    return view('/mhs');
});

Route::get('/orangtua', function () {
    return view('orangtua');
});

Route::get('/study', function () {
    return view('study');
});

Route::get('/krrs', function () {
    return view('krrs');
});

Route::get('/check-db', function () {
    try {
        DB::connection()->getPdo();
        return 'Koneksi ke database berhasil.';
    } catch (\Exception $e) {
        return 'Gagal terhubung ke database: ' . $e->getMessage();
    }
});


use App\Http\Controllers\LoginController;
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/mahasiswa');

Route::get('/mahasiswa', function() {
    // Return view mahasiswa atau controller terkait
})->name('mahasiswa');

use App\Http\Controllers\TestController;

Route::get('/test-database', [TestController::class, 'testDatabaseConnection']);

// Route::post('/login', [LoginController::class, 'login']);
// Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

