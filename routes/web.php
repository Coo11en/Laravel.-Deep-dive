<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AddingNewsController;
use App\Http\Controllers\AuthorizationController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\NewsCategoriesController;
use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news', [NewsController::class, 'index'])->name('news');
Route::get('/hello', [HelloController::class, 'index'])->name('hello');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/category', [CategoriesController::class, 'category'])->name('category');
Route::get('/category/{id}', [NewsCategoriesController::class, 'newsCategory'])->name('newsCategory');
Route::get('/category/{id}/{idn}', [NewsController::class, 'index'])->name('news');
Route::get('/authorization', [AuthorizationController::class, 'authorization'])->name('authorization');
Route::get('/adding', [AddingNewsController::class, 'adding'])->name('adding');




