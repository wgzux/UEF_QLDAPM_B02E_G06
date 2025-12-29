<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.HomeDesktop');
});

Route::get('/fragnews', function () {
    return view('pages.FragNews');
});

Route::get('/addcart', function () {
    return view('pages.Addcart');
});
Route::get('/checkout', function () {
    return view('pages.CheckOut');
});
Route::get('/payment', function () {
    return view('pages.Payment');
});
Route::get('/confirm', function () {
    return view('pages.Confirm');
});
Route::get('/bookingdetails', function () {
    return view('pages.bookingdetails');
});
Route::get('/booking', function () {
    return view('pages.booking');
});