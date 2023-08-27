<?php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\Cast\Bool_;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [BookController::class, 'index'])->name('index');
Route::get('/create', [BookController::class, 'create'])->name('create');
Route::post('/store', [BookController::class, 'store'])->name('store');
Route::get('/{book}/delete', [BookController::class, 'delete'])->name('delete');
Route::get('/{book}/edit', [BookController::class, 'edit'])->name('edit');
Route::post('/{book}/update', [BookController::class, 'update'])->name('update');
