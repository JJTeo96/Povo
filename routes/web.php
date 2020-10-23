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
    return view('mainpage.welcome');
})->name('welcome');

Route::get('/thankyou', function () {
    return view('payment.thankyou');
});

Route::get('/pc', function () {
    return view('payment.purchase_confirmation');
});

Route::get('/reload', function () {
    return view('dashboard.reload');
});

Route::view('/member', 'dashboard.my_membership')->name('member');

Route::view('/payment', 'payment.payment_detail');

Route::view('/dashboard', 'dashboard.dashboard')->name('dashboard');
Route::view('/about', 'mainpage.about');
Route::view('/faq', 'mainpage.faq');
Route::view('/profile', 'dashboard.profile')->name('profile');
Route::view('/addon', 'dashboard.add_on')->name('addon');

Route::view('/login', 'sign_in_out.login');
Route::view('/trc', 'sign_in_out.trc');
Route::view('/register', 'sign_in_out.register');
Route::view('/upgrade_plan', 'upgrade_plan.upgrade_plan');
Route::view('/plan_detail', 'upgrade_plan.plan_detail');



