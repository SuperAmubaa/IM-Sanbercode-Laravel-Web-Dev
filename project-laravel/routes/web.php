<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [HomeController::class, 'utama']);
Route::get('/register', [AuthController::class, 'register']);
Route::post('/home', [AuthController::class, 'home']);

Route::get('/master', function () {
    return view('layouts.master');
});

Route::get('/data-table', function () {
    return view('page.dataTable');
});

Route::get('/table', function () {
    return view('page.table');
});
