<?php

use Illuminate\Support\Facades\Route;

// Serve the static frontend `public/index.html` at the root and for any SPA route.
Route::get('/', function () {
    return file_get_contents(public_path('index.html'));
});

Route::get('{any}', function () {
    return file_get_contents(public_path('index.html'));
})->where('any', '.*');

