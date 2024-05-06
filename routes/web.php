<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SiteControlller;
use App\Http\Controllers\UserController;



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

Route::get('/',[SiteControlller::class,'dashboardClient'])->name('dashboardClient');

Route::get('login',[AccountController::class,'login'])->name('login');

Route::get('register',[AccountController::class,'register'])->name('register');

Route::prefix('user')->group(function()
{
    Route::get('/',[UserController::class,'index'])->name('user.index');
    Route::get('/create',[UserController::class,'create'])->name('user.create');
    Route::post('/create',[UserController::class,'handleCreate']);
    Route::get('/delete/{id}',[UserController::class,'delete'])->name('user.delete');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('user.edit');
    Route::put('/edit/{id}',[UserController::class,'handleEdit'])->name('user.handleEdit');
});