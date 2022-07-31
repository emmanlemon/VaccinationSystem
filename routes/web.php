<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\VaccinationController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\StudentController;
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
Route::resource('/registration', RegistrationController::class);
Route::resource('/admin', AdminController::class)->middleware('isLoggedIn');
Route::resource('/student', StudentController::class)->middleware('isLoggedIn');
Route::resource('/profile/vaccination', VaccinationController::class)->middleware('isLoggedIn');
Route::get('/logout', [Auth::class , 'logout'])->name('logout');


Route::get('/admin/delete/{id}', [AdminController::class , 'destroy']);

Route::get('/student/profile' , [StudentController::class , 'show'])->name('show');



