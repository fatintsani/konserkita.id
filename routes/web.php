<?php

use App\Http\Controllers\ConcertController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\OrderController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ConcertController::class, 'index'])->name('home');

Route::get('/concerts', [ConcertController::class, 'list'])->name('concert.list');

Route::view('/buy-ticket', 'layouts.shop-detail');
Route::view('/cart', 'layouts.cart');
Route::view('/checkout', 'layouts.checkout');
Route::view('/testimonial', 'layouts.testimonial');
Route::view('/404', 'layouts.error-404');
Route::view('/contact', 'layouts.contact');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/cart/add/{id}', [CartController::class, 'add'])->name('cart.add');
Route::get('/cart/remove/{id}', [CartController::class, 'remove'])->name('cart.remove');
Route::get('/cart/increase/{id}', [CartController::class, 'increase'])->name('cart.increase');
Route::get('/cart/decrease/{id}', [CartController::class, 'decrease'])->name('cart.decrease');

Route::post('/orders', [OrderController::class, 'store'])->name('orders.store');

