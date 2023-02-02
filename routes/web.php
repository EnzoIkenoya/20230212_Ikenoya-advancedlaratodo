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

Route::get('/', [TodoController::class,'index']);
Route::post('/store', [TodoController::class, 'store']);
Route::get('/create', [TodoController::class, 'create']);
Route::post('/create', [TodoController::class, 'created']);
Route::get('/update', [TodoController::class, 'update']);
Route::post('/update', [TodoController::class, 'update']);
Route::get('/delete',[TodoController::class, 'delete']);
Route::post('/delete',[TodoController::class, 'delete']);
