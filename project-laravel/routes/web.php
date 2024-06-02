<?php

use App\Models\Genre;
use PhpParser\Node\Expr\Cast;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CastController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;

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

Route::middleware(['auth'])->group(function () {
    Route::get('/cast/create', [CastController::class, 'create']);
    Route::post('/cast', [CastController::class, 'store']);
    Route::get('/cast', [CastController::class, 'index']);
    Route::get('/cast/{id}', [CastController::class, 'show']);
    Route::get('/cast/{id}/edit', [CastController::class, 'edit']);
    Route::put('/cast/{id}', [CastController::class, 'update']);
    Route::delete('/cast/{id}', [CastController::class, 'destroy']);


    Route::get('/genre', [GenreController::class, 'index']);
    Route::get('/genre/create', [GenreController::class, 'create']);
    Route::post('/genre', [GenreController::class, 'store']);
    Route::get('/genre/{id}/edit', [GenreController::class, 'edit']);
    Route::put('/genre/{id}', [GenreController::class, 'update']);
    Route::get('/genre/{id}', [GenreController::class, 'show']);
    Route::delete('/genre/{id}', [GenreController::class, 'destroy']);



    Route::get('/film/create', [FilmController::class, 'create']);
    Route::post('/film', [FilmController::class, 'store']);

    Route::get('/film/{id}/edit', [FilmController::class, 'edit']);
    Route::put('/film/{id}', [FilmController::class, 'update']);
    Route::delete('/film/{id}', [FilmController::class, 'destroy']);

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile/{id}', [ProfileController::class, 'update']);

    Route::post('/comments/{id}', [CommentController::class, 'store']);
});


Route::get('/film', [FilmController::class, 'index']);
Route::get('/film/{id}', [FilmController::class, 'show']);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
