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
    return view('started/home');
});

Route::get('/how-to-use', function () {
    return view('started/how-to-use');
});

//route::get('/home', [TemplateController::class,'index']);
