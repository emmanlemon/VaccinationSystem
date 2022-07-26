<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth;

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

Route::redirect('/', '/auth');

Route::resource('/auth', Auth::class);
Route::resource('/registration', RegistrationController::class)->middleware('isLoggedIn');;
Route::resource('/admin', AdminController::class)->middleware('isLoggedIn');

Route::get('/logout', [Auth::class , 'logout'])->name('logout');