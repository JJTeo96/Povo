<?php

use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/pc', function () {
    return view('purchase_confirmation');
});


=======
Route::view('/about', 'about');
Route::view('/login', 'login');
>>>>>>> 1a84f4b158f84e94c046f8331e1d7dcb08b358c0
