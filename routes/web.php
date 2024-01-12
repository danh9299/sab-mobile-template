<?php

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
    return view('pages.home');
})->name('pages.home');


Route::get('/account', function (){
    return view('pages.account.account');
})->name('pages.account');

// Route for trasnaction-history------------
// Show all trasnaction-history
Route::get('/transaction-history', function (){
    return view('pages.transaction-history.transaction-history');
})->name('pages.transaction-history');
// Show details of a specific transaction-history
Route::get('/transaction-history/show', function(){
    return view('pages.transaction-history.show');
})->name('pages.transaction-history.show');


// Route for coupon------------
// Show all coupons
Route::get('/coupon', function (){
    return view('pages.coupon.coupon');
})->name('pages.coupon');
// Show details of a specific coupon
Route::get('/coupon/show', function(){
    return view('pages.coupon.show');
})->name('pages.coupon.show');