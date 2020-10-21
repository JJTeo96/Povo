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
})->name('welcome');

Route::get('/thankyou', function () {
    return view('thankyou');
});

Route::get('/pc', function () {
    return view('purchase_confirmation');
});

Route::get('/reload', function () {
    return view('reload');
});

Route::view('/member', 'my_membership')->name('member');

Route::view('/payment', 'payment_detail');

Route::view('/dashboard', 'dashboard')->name('dashboard');
Route::view('/about', 'about');
Route::view('/faq', 'faq');
Route::view('/profile', 'profile')->name('profile');
Route::view('/addon', 'add_on')->name('addon');

Route::view('/login', 'login');
Route::view('/trc', 'trc');
Route::view('/register', 'register');
Route::view('/upgrade_plan', 'upgrade_plan');
Route::view('/plan_detail', 'plan_detail');



