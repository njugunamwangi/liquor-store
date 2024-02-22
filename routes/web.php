<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Livewire\Search;
use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/checkout', [SiteController::class, 'checkout'])->name('checkout');

    Route::prefix('account')->group(function () {
        Route::get('/', [AccountController::class, 'home'])->name('account');
        Route::get('/orders', [AccountController::class, 'orders'])->name('my-orders');
        Route::get('/order/{order:tracking_no}', [AccountController::class, 'viewOrder'])->name('order');
        Route::get('/wishlist', [AccountController::class, 'wishlist'])->name('my-wishlist');
        Route::get('/two-factor', [AccountController::class, 'twoFactor'])->name('two-factor');
        Route::get('/browser-sessions', [AccountController::class, 'browserSessions'])->name('browser-sessions');
        Route::get('/close-account', [AccountController::class, 'closeAccount'])->name('close-account');
    });
});

Route::get('/cart', [SiteController::class, 'cart'])->name('cart');
Route::get('/search', Search::class)->name('search');
Route::get('/brands', Brands::class)->name('brands');

Route::post('/pay', [PaymentController::class, 'redirectToGateway'])->name('pay');
Route::get('/payment/callback', [PaymentController::class, 'handleGatewayCallback']);

Route::get('/product/{product:slug}', [ProductController::class, 'show'])->name('product');
