<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Response;
use App\Http\Controllers\RoomController;
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

// Route::get('/', function () {
//     return view('/home/index');
// });
Route::get('/',                 [RoomController::class, 'index'])->name('home');
Route::post('/get-matrix',      [RoomController::class, 'getMatrix'])->name('home.get_matrix');