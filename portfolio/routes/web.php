<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');


Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/portfolio', function () {
    return view('portfolio');
});


