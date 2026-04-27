<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\PublicPostController; // ← tambahan

Route::prefix('posts')->group(function () {
    Route::post('/', [PostController::class, 'createPost']);
    Route::get('/{id}', [PostController::class, 'getPostById']);
    Route::put('/{id}/tag/{tagId}', [PostController::class, 'addTag']);
});

Route::prefix('comments')->group(function () {
    Route::post('/', [CommentController::class, 'createComment']);
});

Route::prefix('tags')->group(function () {
    Route::post('/', [TagController::class, 'createTag']);
});

Route::prefix('books')->group(function () {
    Route::get('/', [BookController::class, 'getAll']);
    Route::get('/{id}', [BookController::class, 'getOne']);
    Route::post('/', [BookController::class, 'create']);
    Route::put('/{id}', [BookController::class, 'update']);
    Route::delete('/{id}', [BookController::class, 'delete']);
});

Route::get('/public-posts', [PublicPostController::class, 'getAllPosts']);