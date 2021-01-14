<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorController;

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

Route::post('/books',[BooksController::class,'store']);
Route::patch('/books/{book}',[BooksController::class,'update']);
Route::delete('/books/{book}',[BooksController::class,'delete']);

Route::post('/authors',[AuthorController::class,'store']);