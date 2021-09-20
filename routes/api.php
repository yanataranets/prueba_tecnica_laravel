<?php

use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\PostController;
use App\Http\Controllers\API\CommentController;

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

    Route::get('posts', [PostController::class, 'index'])->name('index');
    Route::post('store', [PostController::class, 'storeOrUpdate'])->name('store');
    Route::get('view/{id}', [PostController::class, 'view'])->name('view');
    Route::put('update/{id}', [PostController::class, 'storeOrUpdate'])->name('update');
    Route::get('delete/{id}', [PostController::class, 'delete'])->name('delete');
    Route::get('delete/comment/{id}', [CommentController::class, 'delete'])->name('delete');
    Route::get('sortType', [PostController::class, 'sortType'])->name('sortType');

    Route::get('comments/{id}', [PostController::class, 'showcomment'])->name('comments');

});

