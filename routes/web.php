<?php

use App\Http\Controllers\Employees;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [Employees::class, 'index']);
Route::get('/select', [Employees::class, 'insert']);
Route::get('/insert-timestamp', [Employees::class, 'insertTimestamp']);
Route::get('/insert-prepared', [Employees::class, 'insert-Prepared']);
Route::get('/insert-binding', [Employees::class, 'insert-Binding']);

Route::get('/update', [Employees::class, 'update']);
Route::get('/delete', [Employees::class, 'delete']);

Route::get('/statement', [Employees::class, 'statement']);
