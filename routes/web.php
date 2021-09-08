<?php

use App\Http\Controllers\MovieController;
use Illuminate\Support\Facades\Route;


Route::resource('/movie', MovieController::class);

Route::post('movie/search', [MovieController::class, 'search' ])->name('movie.search');
