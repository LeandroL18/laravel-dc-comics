<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/', [ComicsController :: class, 'index']) -> name('index');

Route::get('/comics/create', [ComicsController :: class, 'create']) -> name('create');
Route::post('/comics/create', [ComicsController::class, 'store'])->name('store');

Route::get('/comics/{id}', [ComicsController :: class, 'show']) -> name('show');