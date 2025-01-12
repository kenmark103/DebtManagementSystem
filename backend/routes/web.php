<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CashFlowRecordController;
use App\Http\Controllers\CustomersController;
use App\Http\Controllers\EmployeesController;
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

Route::get('/', function () {
    return view('welcome');
});


#Authentication

// authentication
Route::get('/auth/login-basic', [AuthController::class, 'loginBasic'])->name('auth-login-basic');
Route::get('/auth/register-basic', [AuthController::class, 'registerBasic'])->name('auth-register-basic');
Route::get('/auth/forgot-password-basic', [AuthController::class, 'forgotPasswordBasic'])->name('auth-reset-password-basic');
Route::post('/auth/register', [AuthController::class, 'register'])->name('auth-register');
Route::post('/auth/login', [AuthController::class, 'login'])->name('auth-login');
Route::post('/auth/logout', [AuthController::class, 'logout'])->name('auth-logout');


#Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth'])->name('dashboard.show');

#Customers
Route::resource('customers', CustomersController::class);

#Employees
Route::resource('employees', EmployeesController::class);



