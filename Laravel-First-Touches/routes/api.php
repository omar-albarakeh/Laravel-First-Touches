<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\AttachmentController;


Route::get('users', [UserController::class, 'index']);
Route::post('users', [UserController::class, 'store']);
Route::get('users/{user}', [UserController::class, 'show']); 
Route::put('users/{user}', [UserController::class, 'update']); 
Route::delete('users/{user}', [UserController::class, 'destroy']); 


Route::get('news', [NewsController::class, 'index']);
Route::post('news', [NewsController::class, 'store']);
Route::get('news/{news}', [NewsController::class, 'show']); 
Route::put('news/{news}', [NewsController::class, 'update']); 
Route::delete('news/{news}', [NewsController::class, 'destroy']); 


Route::get('articles', [ArticleController::class, 'index']);
Route::post('articles', [ArticleController::class, 'store']);
Route::get('articles/{article}', [ArticleController::class, 'show']); 
Route::put('articles/{article}', [ArticleController::class, 'update']); 
Route::delete('articles/{article}', [ArticleController::class, 'destroy']); 


Route::get('attachments', [AttachmentController::class, 'index']); 
Route::post('attachments', [AttachmentController::class, 'store']); 
Route::get('attachments/{attachment}', [AttachmentController::class, 'show']); 
Route::put('attachments/{attachment}', [AttachmentController::class, 'update']); 
Route::delete('attachments/{attachment}', [AttachmentController::class, 'destroy']);
