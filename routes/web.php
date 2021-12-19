<?php

use App\Http\Controllers\AdminPagesController;
use App\Http\Controllers\user\UserController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', [AdminPagesController::class, 'dashboard'])->name('admin.dashboard');
Route::get('/',[UserController::class,'index']);
Route::get('/contact',[UserController::class,'contact']);
Route::get('/cars',[UserController::class,'cars']);
Route::get('/about',[UserController::class,'about']);