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

// Route::get('/how-to-work', function () {
//     return view('started/');
// });

Route::get('/login-siswa', function () {
    return view('login-siswa');
});

Route::get('/login-guru', function () {
    return view('login-guru');
});

//route::get('/home', [TemplateController::class,'index']);
