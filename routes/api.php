<?php

use App\Http\Controllers\FileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FolderController;
use App\Http\Controllers\SubfolderController;

Route::get('/folders', [FolderController::class, 'index']);
Route::get('/folders/{id}', [FolderController::class, 'show']);
Route::post('/folders', [FolderController::class, 'store']);
Route::put('/folders/{id}', [FolderController::class, 'update']);
Route::delete('/folders/{id}', [FolderController::class, 'destroy']);

Route::get('/subfolders', [SubfolderController::class, 'index']);
Route::get('/subfolders/{id}', [SubfolderController::class, 'show']);
Route::post('/subfolders', [SubfolderController::class, 'store']);
Route::put('/subfolders/{id}', [SubfolderController::class, 'update']);
Route::delete('/subfolders/{id}', [SubfolderController::class, 'destroy']);

Route::get('/files', [FileController::class, 'index']);
Route::get('/files/{id}', [FileController::class, 'show']);
Route::post('/files', [FileController::class, 'store']);
Route::put('/files/{id}', [FileController::class, 'update']);
Route::delete('/files/{id}', [FileController::class, 'destroy']);

Route::get('/test', function () {
    return response()->json(['message' => 'berhasil']);
});