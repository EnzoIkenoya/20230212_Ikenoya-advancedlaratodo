<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [TodoController::class,'index'])->middleware('auth');
Route::get('/index', [TodoController::class,'index'])->middleware('auth');
Route::post('/store', [TodoController::class, 'store'])->middleware('auth');
Route::get('/create', [TodoController::class, 'create'])->middleware('auth');
Route::post('/create', [TodoController::class, 'created'])->middleware('auth');
Route::get('/update', [TodoController::class, 'update'])->middleware('auth');
Route::post('/update', [TodoController::class, 'update'])->middleware('auth');
Route::get('/delete',[TodoController::class, 'delete'])->middleware('auth');
Route::post('/delete',[TodoController::class, 'delete'])->middleware('auth');
Route::get('find',[TodoController::class, 'find'])->middleware('auth');
Route::get('search', [TodoController::class, 'search'])->middleware('auth');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
