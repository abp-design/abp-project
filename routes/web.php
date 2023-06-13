<?php

use App\Http\Controllers\contactcontroller;
use App\Http\Controllers\TeamController;
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
    return view('My web site');
});

Route::get('about me', function () {
    return view('about me');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('gallery', function () {
    return view('gallery');
});

Route::get('service', function () {
    return view('service');
});

Route::post('/team',[TeamController::class,'store']);