<?php

namespace App\Http\Controllers\Frontend;

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Frontend\OrderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




//frontend Little & Little
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    // Các route cho phần frontend
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('/pay', 'OrderController@pay');
    Route::get('/paysuccess', 'OrderController@paysuccess')->name('paysuccess');
    Route::get('/event', 'EventController@index');
    Route::get('/detail', 'EventController@detail');
    Route::get('/contact', 'ContactController@index');
    Route::post('/orders', 'OrderController@create')->name('order.create');
    Route::post('/checkout', 'OrderController@checkout')->name('order.checkout');
    Route::get('/callback/{ID_CU}/{ID_TICKET}/{quantity}', 'OrderController@callback')->name('callback');
    Route::post('seend','ContactController@seend')->name('sennd');

    // ...
});

//backend Little & Little
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class);
    Route::resource('package', PackageController::class);
    Route::resource('ticket', TicketController::class);
    Route::get('/order', [CustomerController::class, 'index'])->name('order');
    Route::get('/contacts', [ContactController::class, 'index'])->name('contacts');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';