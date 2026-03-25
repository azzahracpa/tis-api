<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

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