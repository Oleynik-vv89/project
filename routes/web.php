<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/info', [\App\Http\Controllers\HomeController::class, 'index']);

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index']);

Route::get('/category/{id}/news', [\App\Http\Controllers\NewsInCategoryController::class, 'index']);

Route::get('/category/{id}/news/{name}', [\App\Http\Controllers\NewsController::class, 'index']);




