<?php

namespace App\Http\Controllers\Frontend;
namespace App\Http\Controllers\Backend;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;




//frontend Little & Little
Route::group(['namespace' => 'App\Http\Controllers\Frontend'], function () {
    // Các route cho phần frontend
    Route::get('/', 'HomeController@index');
    Route::get('/pay', 'VnpayController@index');
    Route::get('/event', 'EventController@index');
    Route::get('/detail', 'EventController@detail');
    Route::get('/contact', 'ContactController@index');
    Route::post('/order', 'VnpayController@create')->name('order.create');
    // ...
});

//backend Little & Little
Route::get('/dashboard', function () {
    return view('backend.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::resource('events', EventController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';