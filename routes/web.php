<?php

use App\Http\Controllers\FrontendController;
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
    return view('welcome');
});

Route::get('/auth', function () {
    return view('login');
});

Route::get('/forgot-password', function () {
    return view('forgot-password');
});

Route::get('/category-product', function () {
    return view('category');
});

Route::get('/cart-product', function () {
    return view('cart');
});

Route::get('/single-product', function () {
    return view('single-product');
});

Route::get('/message', function () {
    return view('message');
});

Route::get('/profile', function (){
    return view('profile');
});

Route::get('/edit-profile', function (){
    return view('edit-profile');
});

Route::get('/checkout', function(){
    return view('checkout');
});

Route::get('/checkout-payment', function(){
    return view('checkout-payment');
});

Route::get('/checkout-credit-card', function(){
    return view('checkout-credit-card');
});
Route::get('/checkout-bank', function(){
    return view('checkout-bank');
});

Route::get('/checkout-paypal', function(){
    return view('checkout-paypal');
});

Route::get('/checkout-cash', function(){
    return view('checkout-cash');
});

Route::get('/payment-success', function(){
    return view('payment-success');
});
Route::get('/sub-category-barier', function(){
    return view('sub-category-barier');
});
Route::get('/sub-category-skin-reglow', function(){
    return view('category-skin-reglow');
});

Route::get('/settings', function(){
    return view('settings');
});

Route::get('/register', function(){
    return view('register');
});

Route::get('/point', function(){
    return view('point');
});

Route::get('/detail-point', function(){
    return view('detail-point');
});

Route::get('/status-penukaran-point', function(){
    return view('status-penukaran-point');
});

Route::get('/change-password', function(){
    return view('change-password');
});

Route::get('/privacy-policy', function(){
    return view('privacy-policy');
});

Route::get('/forget-password-succes', function(){
    return view('forget-password-succes');
});

Route::get('/history-shoping', function(){
    return view('history-shoping');
});
Route::get('/notification-details', function(){
    return view('notification-details');
});


Route::get('/', [FrontendController::class, 'index']);


