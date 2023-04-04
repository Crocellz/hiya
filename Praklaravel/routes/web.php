<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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

Route::get('/dasboard', function () {
    return view('dasboard');
});

Route::get('/sepakbola', function () {
    return view('pilihan1');
});

Route::get('/basket', function () {
    return view('pilihan2');
});

Route::get('/tenis', function () {
    return view('pilihan3');
});

Route::get('/renang', function () {
    return view('pilihan4');
});