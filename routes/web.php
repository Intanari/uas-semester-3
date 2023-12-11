<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [BookController::class, 'index'])->name('dashboard');
    Route::post('/dashboard/book/store', [BookController::class, 'store'])->name('book.store');
    Route::put('/dashboard/book/{id}/update', [BookController::class, 'update'])->name('book.update');
    Route::delete('/dashboard/book/{id}/destroy', [BookController::class, 'destroy'])->name('book.destroy');
});

require __DIR__.'/auth.php';
