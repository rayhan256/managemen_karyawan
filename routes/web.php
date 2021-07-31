<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\EmployeeController;
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
})->middleware(['guest']);

Route::get('/register', function() {
    return view('register');
})->middleware(['guest']);

Route::prefix('cms')->middleware(['auth'])->group(function() {
    Route::get('/dashboard', function() {
    return view('dashboard');
});
Route::resource('employee', EmployeeController::class);
Route::resource('department', DepartmentController::class);
Route::get('/logout', [DashboardController::class,'logout']);
});