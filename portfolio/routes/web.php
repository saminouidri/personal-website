<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Middleware\PortfolioPassword;

Route::get('/article/{id}', [ArticleController::class, 'show'])->name('article.show');


Route::get('/', [HomeController::class, 'index'])->name('home');


Route::get('/portfolio/password', [PortfolioController::class, 'showPasswordForm'])->name('password');
Route::post('/portfolio/password', [PortfolioController::class, 'checkPassword'])->name('portfolio.check');

// Apply the PortfolioPassword middleware directly to the portfolio route
Route::get('/portfolio', [PortfolioController::class, 'index'])->middleware(PortfolioPassword::class)->name('portfolio');
