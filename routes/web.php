<?php

use App\Http\Controllers\GirisController;
use App\Http\Controllers\PostController;
use App\Http\Middleware\AdminKontrol;
use Illuminate\Support\Facades\Route;

Route::get('/', [PostController::class, 'index']);
Route::get('/yazi/{post}', [PostController::class, 'show']);

Route::get('/login', [GirisController::class, 'form']);
Route::post('/login', [GirisController::class, 'giris']);
Route::get('/cikis', [GirisController::class, 'cikis']);

Route::middleware(AdminKontrol::class)->group(function () {
    Route::get('/yeni', [PostController::class, 'create']);
    Route::post('/yeni', [PostController::class, 'store']);
    Route::delete('/yazi/{post}', [PostController::class, 'destroy']);
});
