<?php

use App\Http\Controllers\PostController;
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

Route::get('/', [PostController::class, 'index'])->name('post_index');
Route::get('/posts/new', [PostController::class, 'new'])->name('post_new');
Route::post('/posts/store', [PostController::class, 'store'])->name('post_store');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('post_edit');
Route::post('/posts/{id}/update', [PostController::class, 'update'])->name('post_update');
Route::get('/posts/{id}/show', [PostController::class, 'show'])->name('post_show');
Route::get('/posts/{id}/delete', [PostController::class, 'delete'])->name('post_delete');
