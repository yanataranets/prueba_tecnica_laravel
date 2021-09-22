<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\CommentController;

use App\Http\Controllers\API\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('login', [AuthController::class, 'signin']);
Route::post('register', [AuthController::class, 'signup']);

Route::middleware('auth:sanctum')->group( function () {
    Route::delete('delete/{id}', [PostController::class, 'delete'])->name('delete');
    Route::get('delete/comment/{id}', [CommentController::class, 'delete'])->name('delete');




    Route::get('users', [UserController::class, 'index'])->name('indexusers');
    Route::get('posts', [PostController::class, 'index'])->name('index');
    Route::get('posts/{id}/comments', [PostController::class, 'showcomment'])->name('comments');

    Route::get('posts/sort', [PostController::class, 'sortType'])->name('sortType');
    Route::get('posts/{id}/comments/sort', [PostController::class, 'sortTypeComment'])->name('sortType');
    Route::get('users/sort', [UserController::class, 'sortType'])->name('userSort');

    Route::get('posts/{id}', [PostController::class, 'view'])->name('view');
    Route::get('posts/comment/{id}', [CommentController::class, 'view']);
    Route::get('user/{id}', [UserController::class, 'view']);

    Route::post('posts/store', [PostController::class, 'store'])->name('store');
    Route::post('posts/{id}/comment/store', [PostController::class, 'storecomment']);
    Route::post('user/store', [UserController::class, 'store'])->name('storeuser');

    Route::patch('posts/{id}/update', [PostController::class, 'update'])->name('update');
    Route::patch('user/{id}/update', [UserController::class, 'update'])->name('updateuser');
    Route::patch('comment/{id}/update', [CommentController::class, 'update'])->name('updatecomment');



});

