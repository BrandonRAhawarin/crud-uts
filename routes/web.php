<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LaptopController;

Route::resource('laptops', LaptopController::class);
Route::get('/', function () {
    return view('welcome');
});
