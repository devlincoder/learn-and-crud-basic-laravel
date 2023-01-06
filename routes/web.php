<?php

use App\Http\Controllers\SinhvienController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("welcome");
});

Route::resource("/sinhvien",SinhvienController::class);