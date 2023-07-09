<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\VnpayController;
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
    return view('frontend.pages.home');
});
Route::get('/event', function () {
    return view('frontend.pages.events');
});
Route::get('/detail', function () {
    return view('frontend.pages.detail_events');
});
Route::get('/contact', function () {
    return view('frontend.pages.contact');
});
Route::get('/pay', function () {
    return view('frontend.pages.pay');
});
Route::get('/success', function () {
    return view('frontend.pages.pay_success');
});
Route::post('/order', [VnpayController::class, 'checkout'])->name('order.create');
Route::get('/order', [VnpayController::class, 'index'])->name('order.index');