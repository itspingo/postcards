<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\StripeController;


Route::get('/test', [TestController::class, 'index'])->name('index');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', [TestController::class, 'index'])->name('index');
Route::get('/stripe', [StripeController::class, 'index'])->name('index');
// Route::get('/','\app\Http\Controllers\StripeController@index');
Route::post('/stripe/checkout', [StripeController::class, 'checkout'])->name('stripe.checkout');
Route::get('/stripe/success', [StripeController::class, 'success'])->name('stripe.success');
Route::get('/stripe/cancel', [StripeController::class, 'cancel'])->name('stripe.cancel');