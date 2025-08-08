<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [IndexController::class, 'index'   ]);
Route::get(
    "/about",
    [AboutController::class, 'about']
);
Route::get(
    "/contact",
    [ContactController::class, 'contact']
);
