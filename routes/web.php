<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.5');
});
Route::get('/2', function () {
    return view('pages.5');
});
