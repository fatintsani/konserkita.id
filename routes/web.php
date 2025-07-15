<?php

use App\Http\Controllers\ConcertController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'home');
Route::get('/', [ConcertController::class, 'index']);
Route::get('/concerts', [ConcertController::class, 'index'])->name('concert.list');

Route::view('/concert', 'layouts.shop'); 
Route::view('/buy-ticket', 'layouts.shop-detail');
Route::view('/cart', 'layouts.cart');
Route::view('/checkout', 'layouts.checkout'); 
Route::view('/testimonial', 'layouts.testimonial');
Route::view('/404', 'layouts.error-404');
Route::view('/contact', 'layouts.contact');


