<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\PelamarController;
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

Route::get('/', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/sign', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/dashboard', function(){
return view('dashboard.index');
})->middleware('auth');
Route::get('/home', function(){
    return view('dashboard.index');
    })->middleware('auth');
Route::resource('/data', PelamarController::class)->except('show')->middleware('auth');
Route::get('/edit/{id}', [PelamarController::class, 'ajax_edit'])->middleware('auth');
Route::get('/detail/{id}', [PelamarController::class, 'ajax_detail'])->middleware('auth');
Route::get('/delete/{id}', [PelamarController::class, 'destroy'])->middleware('auth');
Route::put('/edit-data', [PelamarController::class, 'update'])->middleware('auth');
