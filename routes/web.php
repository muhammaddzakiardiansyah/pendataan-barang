<?php

use App\Http\Controllers\DashboardController;
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

Route::get('/dashboard', [DashboardController::class, 'dashboard']); //->middleware('auth');
Route::get('/databarang', [DashboardController::class, 'databarang']);
Route::get('/detaildatabarang/{id}', [DashboardController::class, 'detaildatabarang']);

Route::get('/login', [LoginController::class, 'index']);  //->name('login')->middleware('guest');

Route::get('/tambahdatabarang', [ItemController::class, 'create']);
Route::post('/tambahdatabarang', [ItemController::class, 'store']);
Route::get('/editdatabarang/{id}', [ItemController::class, 'edit']);
Route::post('/editdatabarang/{id}', [ItemController::class, 'update']);

// Route::get('/', function () {
//     return view('welcome');
// });
