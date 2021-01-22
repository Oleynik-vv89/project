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

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/category', [\App\Http\Controllers\CategoryController::class, 'index'])->name('category');

Route::get('/category/1/news', [\App\Http\Controllers\NewsInCategoryController::class, 'index'])->name('category.news');

Route::get('/category/1/news/1', [\App\Http\Controllers\NewsController::class, 'index'])->name('news');




