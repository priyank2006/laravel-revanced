<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// To Test Error Pages, Change The URL and 
Route::get('/error/{err}', function ($err) {
    abort($err);
});
