<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FileUploadController;
Route::get('/', [FileUploadController::class, 'showForm'])->name('upload.form');
Route::get('/upload', [FileUploadController::class, 'showForm'])->name('upload.form');
Route::post('/upload', [FileUploadController::class, 'upload'])->name('upload.file');
