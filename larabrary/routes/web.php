<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
})->name('login');

Route::get('/book', [BookController::class, 'index'])->name('book.index');
Route::get('/book/create', [BookController::class, 'create'])->name('book.create');
Route::post('/book/create', [BookController::class, 'store'])->name('book.store');
Route::get('/book/edit/{id}', [BookController::class, 'edit'])->name('book.edit');
Route::put('/book/edit/{id}', [BookController::class, 'update'])->name('book.update');
