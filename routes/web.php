<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Spatie\FlareClient\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View("welcome");
});

Route::get('/home', function () {
    return View("home");
});

Route::get('/product', function () {
    return View("product");
});

Route::get('/unicode', function () {
    return View("form");
});

Route::post('/unicode', function () {
    return "Phuong thuc Post";
});

Route::match(["get","post"],'/unicode', function () {
    return "Phuong thuc Post";
});

