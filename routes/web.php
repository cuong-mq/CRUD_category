<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;

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


Route::get('/', [CategoryController::class, 'index'])->name('category.index');
Route::get('/category/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/category', [CategoryController::class, 'store'])->name('category.store');
Route::get('/category/{id}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{id}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{id}', [CategoryController::class, 'delete'])->name('category.delete');

Route::get('/category/{categoryId}/post', [PostController::class, 'index'])->name('post.index');
Route::get('/category/{categoryId}/post/create', [PostController::class, 'create'])->name('post.create');
Route::post('/category/{categoryId}/post', [PostController::class, 'store'])->name('post.store');
Route::get('/category/{categoryId}/post/{id}/edit', [PostController::class, 'edit'])->name('post.edit');
Route::put('/category/{categoryId}/post/{id}', [PostController::class, 'update'])->name('post.update');
Route::delete('/category/{categoryId}/post/{id}', [PostController::class, 'delete'])->name('post.delete');
