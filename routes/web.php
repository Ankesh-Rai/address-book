<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\excelCntrlr;

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
    return view('login');
});
Route::post('/check', [UserController::class, 'check'])->name('check');
Route::post('/create', [UserController::class, 'create'])->name('create');
Route::get('/header', [UserController::class, 'header']);
Route::get('/dashboard', [UserController::class, 'dashboard']);
Route::get('/userform', [UserController::class, 'userform']);
Route::get('/userProfile', [UserProfileController::class, 'userProfile']);
Route::get('/delete/{id}', [UserController::class, 'delete']);
Route::get('/edit/{id}', [UserController::class, 'edit']);
Route::post('/update', [UserController::class, 'update'])->name('update');
Route::get('/search', [UserController::class, 'search'])->name('search');
Route::get('/view/{id}', [UserController::class, 'view']);

Route::get('/bulk_form', [excelCntrlr::class, 'index']);
Route::post('/bulk_form', [excelCntrlr::class, 'importData'])->name('upload-excel');

