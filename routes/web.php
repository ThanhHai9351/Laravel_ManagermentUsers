<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\SiteControlller;


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