<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\PribadiController;

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
    return view('welcome');
});
Route::get('/register',[RegisterController::class,'create'])->middleware('guest');
Route::post('/register',[RegisterController::class,'store'])->middleware('guest');
Route::get('/login',[LoginController::class,'loginForm'])->name('login')->middleware('guest');
Route::post('/login',[LoginController::class,'authenticate'])->middleware('guest');
Route::post('/logout',LogoutController::class)->middleware('auth');
Route::get('/pribadi/mine',[PribadiController::class,'mine']);

Route::middleware('auth')->group(function () {
    Route::resource('pribadi',PribadiController::class);

});