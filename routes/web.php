<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\usercontroller;

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


Route::get('/test', function () {
    return view('test');
});

Route::get('/kapil', function () {
    return view('kapil');
});


Route::get('/register', function () {
    return view('register');
});

Route::get('/login', function () {
    return view('login');
});


Route::post('/register', [usercontroller::class, 'Demo'])->name('Singup');
