<?php

use App\Http\Controllers\CurdController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CurdController::class, 'index']);
Route::prefix('curd')->group(function () {
    Route::get('/home', [CurdController::class, 'index'])->name('home');
    Route::get('/add', [CurdController::class, 'add'])->name('add');
    Route::post('/add', [CurdController::class, 'create'])->name('create');
    Route::get('/edit/{id}', [CurdController::class, 'edit'])->name('edit');
    Route::post('/update', [CurdController::class, 'update'])->name('update');
    Route::get('/delete/{id}', [CurdController::class, 'destroy'])->name('delete');
});
