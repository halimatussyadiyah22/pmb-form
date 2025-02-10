<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\OrtuController;
use App\Http\Controllers\PembayaranController;
use App\Http\Controllers\PjurusanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PribadiController;
use App\Http\Controllers\WaliController;
use App\Http\Controllers\SekolahController;
use App\Http\Controllers\DokumenController;

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

// Route::get('', function () {
//     return view('welcome');
// });
Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');
Route::get('/login',[LoginController::class,'loginForm'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',LogoutController::class)->middleware('auth');


Route::middleware('auth')->group(function () {
    Route::get('/dokumen/mine',[DokumenController::class,'mine']);
    Route::get('/ortu/mine',[OrtuController::class,'mine']);
    Route::get('/pribadi/mine',[PribadiController::class,'mine']);
    // Route::get('/wali/mine',[WaliController::class,'mine']);
    Route::get('/sekolah/mine',[SekolahController::class,'mine']);
    Route::get('/pembayaran/mine',[PembayaranController::class,'mine']);
    Route::get('/pJurusan/mine',[PjurusanController::class,'mine']);

    Route::resource('pribadi',PribadiController::class);
    Route::resource('ortu',OrtuController::class);
    Route::resource('wali',WaliController::class);
    Route::resource('sekolah',SekolahController::class);
    Route::resource('dokumen',DokumenController::class);
    Route::resource('pembayaran',PembayaranController::class);
    Route::resource('pJurusan',PjurusanController::class);


});