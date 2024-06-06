<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LayananController;
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
Route::get('/index', function () {
    return view('Layouts/index');
});

Route::get('Dashboard', function () {
    return view('Layouts/Dashboard');
});

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

// Route Login 
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

//Route CRUD Layanan Faktur
Route::get('/Layanan',[LayananController::class,'index']);
Route::get('/Layanan-Entry',[LayananController::class,'create']);
Route::post('/Layanan-proses',[LayananController::class,'store']);
Route::get('/Layanan-Edit/{id}',[LayananController::class,'edit']);
Route::post('/Layanan-Update/{id}',[LayananController::class,'update']);
Route::get('/Layanan-Delete/{id}',[LayananController::class,'destroy']);
