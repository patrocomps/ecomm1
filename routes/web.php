<?php

use App\Http\Controllers\CategoryController;
use Illuminate\Support\Facades\Route;
use app\Http\Controllers\Controller;
Route::get('/', function () {
    return view('welcome');
});
Route::resource('/category',CategoryController::class);