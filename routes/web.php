<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\mainController;


Route::get('/', [mainController::class, 'index']);
Route::get('/downloadResume', [mainController::class, 'downloadResume'])->name('downloadResume');
