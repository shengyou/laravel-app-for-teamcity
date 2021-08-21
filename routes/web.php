<?php

use App\Http\Controllers\AdminHomeController;
use App\Http\Controllers\AdminPostController;
use App\Http\Controllers\HomeController;
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

Route::get('/', [HomeController::class, 'index'])->name("home.index");
Route::get('posts', [PostController::class, 'index'])->name("posts.index");
Route::get('posts/{post}', [PostController::class, 'show'])->name("posts.show");

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', [AdminHomeController::class, 'index'])->name("home.index");
    Route::get('posts', [AdminPostController::class, 'index'])->name("posts.index");
    Route::get('posts/create', [AdminPostController::class, 'create'])->name("posts.create");
    Route::post('posts', [AdminPostController::class, 'store'])->name("posts.store");
    Route::get('posts/{post}/edit', [AdminPostController::class, 'edit'])->name("posts.edit");
    Route::patch('posts/{post}', [AdminPostController::class, 'update'])->name("posts.update");
    Route::delete('posts/{post}', [AdminPostController::class, 'destroy'])->name("posts.destroy");
});
