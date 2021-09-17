<?php

use App\Http\Controllers\Comment\CommentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Post\PostController;

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

Route::get('/', [PostController::class, 'index'])->name('index');
Route::post('store', [PostController::class, 'storeOrUpdate'])->name('store');
Route::get('view/{id}', [PostController::class, 'view'])->name('view');
Route::put('update/{id}', [PostController::class, 'storeOrUpdate'])->name('update');
Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
Route::get('delete/comment/{id}', [CommentController::class, 'delete'])->name('delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('comments/{id}', [PostController::class, 'showcomment'])->name('comments');
