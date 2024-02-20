<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ComicsController;

Route::get('/', [ComicsController :: class, 'index']) -> name('index');

Route::get('/comics/{id}', [ComicsController :: class, 'show']) -> name('show');