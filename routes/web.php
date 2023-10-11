<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', [ItemController::class, 'index']);
Route::get('/login', [LoginController::class, 'index']);

// Route::get('/', function () {
//     return view('welcome');
// });
