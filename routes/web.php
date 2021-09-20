<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;

Route::resource('/', MovieController::class);
Route::resource('/movie', MovieController::class);

Route::post('movie/search', [MovieController::class, 'search' ])->name('movie.search');

Route::GET('rated', [MovieController::class, 'rated' ])->name('movie.rated');
Route::post('movie/popular', [MovieController::class, 'popular' ])->name('movie.popular');
Route::post('movie/release', [MovieController::class, 'release' ])->name('movie.release');
