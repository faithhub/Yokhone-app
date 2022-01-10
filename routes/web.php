<?php

use Illuminate\Support\Facades\Auth;
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
    return redirect()->route('login');
    // return view('welcome');
});


Auth::routes();

//User Routes
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::match(['get', 'post'], '/edit-user/{id}', [App\Http\Controllers\HomeController::class, 'edit_user'])->name('edit.user');
Route::match(['get', 'post'], '/create-user', [App\Http\Controllers\HomeController::class, 'create_user'])->name('create.user');
Route::get('/delete-user/{id}', [App\Http\Controllers\HomeController::class, 'delete_user'])->name('delete.user');

//User Routes
Route::get('/employees', [App\Http\Controllers\HomeController::class, 'employees'])->name('employees');
Route::match(['get', 'post'], '/edit-employee/{id}', [App\Http\Controllers\HomeController::class, 'edit_employee'])->name('edit.employee');
Route::match(['get', 'post'], '/create-employee', [App\Http\Controllers\HomeController::class, 'create_employee'])->name('create.employee');