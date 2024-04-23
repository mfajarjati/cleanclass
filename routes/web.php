<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TemplateController;

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

Route::get('/login-siswa', function () {
    return view('login-siswa');
});

Route::get('/login-guru', function () {
    return view('login-guru');
});

Route::get('/home-siswa', function () {
    return view('siswa/home-siswa');
});

Route::get('/leaderboard', function () {
    return view('siswa/leaderboard');
});

Route::get('/laporan', function () {
    return view('siswa/laporan');
});

Route::get('/jadwal', function () {
    return view('siswa/jadwal');
});

Route::get('/event', function () {
    return view('siswa/event');
});
//route::get('/home', [TemplateController::class,'index']);
