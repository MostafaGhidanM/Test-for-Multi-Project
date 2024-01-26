<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
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
Route::get('/test', function () {
    return view('welcome');
});

Route::get('/user', function () {
    return view('users.index');
});
Route::get('/dashboard', function () {
    return view('dashboard.index');
});

Route::resource("products", BannerController::class);