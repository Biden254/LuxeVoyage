<?php

//use App\Http\Controllers\PackageController;
//use App\Http\Controllers\BookingController;
//use App\Http\Controllers\ReviewController;

Route::get('/', function () {
    return file_get_contents(public_path('index.html'));
});


//Route::get('/', [PackageController::class, 'index']);
//Route::get('/packages/{id}', [PackageController::class, 'show']);

//Route::post('/book', [BookingController::class, 'store']);
//Route::post('/review', [ReviewController::class, 'store']);
