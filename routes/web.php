<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Cat_Controller;
use App\Http\Controllers\Post_Controller;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/records', [Cat_Controller::class, 'index'])->name('records.index');
Route::get('/records/create', [Cat_Controller::class, 'create'])->name('records.create');
Route::post('/records', [Cat_Controller::class, 'store'])->name('records.store');
Route::get('/records/{id}/edit', [Cat_Controller::class, 'edit'])->name('records.edit');
Route::put('/records/{id}', [Cat_Controller::class, 'update'])->name('records.update');
Route::delete('/{id}/records', [Cat_Controller::class, 'delete'])->name('records.delete');

Route::get('/records/post', [Post_Controller::class, 'index'])->name('post.index');
Route::get('/records/post/create', [Post_Controller::class, 'create'])->name('post.create');
Route::post('/records/post', [Post_Controller::class, 'store'])->name('post.store');
Route::get('/records/post/{id}/edit', [Post_Controller::class, 'edit'])->name('post.edit');
Route::put('/records/post/{id}', [Post_Controller::class, 'update'])->name('post.update');
Route::delete('/{id}/records/post', [Post_Controller::class, 'delete'])->name('post.delete');
