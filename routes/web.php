<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('employees')->group(function () {
    Route::post('/', [App\Http\Controllers\EmployeeController::class, 'store'])->name("employee-store");
    Route::get('/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name("employee-create");
    Route::get('/', [App\Http\Controllers\EmployeeController::class, 'index'])->name("employees");
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
