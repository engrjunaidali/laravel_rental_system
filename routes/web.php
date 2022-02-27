<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\adminController;
use App\Http\Controllers\propertiesController;
use App\Http\Controllers\leasesController;
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

// Route::view('/admin', 'admin.dashboard');

Auth::routes();

// Admin Routes
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('Dashboard')->middleware('auth');

// Properties

Route::prefix('properties')->middleware('auth')->group(function () {
    Route::get('/', [App\Http\Controllers\propertiesController::class, 'index'])->name('Properties');
    Route::get('/create', [App\Http\Controllers\propertiesController::class, 'create']);
    Route::post('/store', [App\Http\Controllers\propertiesController::class, 'store']);
    Route::get('/delete/{pid}', [App\Http\Controllers\propertiesController::class, 'destroy']);
    Route::get('/edit/{pid}', [App\Http\Controllers\propertiesController::class, 'edit']);
    Route::post('/update/{pid}', [App\Http\Controllers\propertiesController::class, 'update']);
    Route::get('/search', [App\Http\Controllers\propertiesController::class, 'search']);

});

Route::prefix('leases')->group(function () {
    Route::get('/', [App\Http\Controllers\leasesController::class, 'index'])->name('Leases');
    Route::get('/create', [App\Http\Controllers\leasesController::class, 'create'])->name('Create Lease');
    Route::post('/store', [App\Http\Controllers\leasesController::class, 'store']);
    Route::get('/delete/{pid}', [App\Http\Controllers\leasesController::class, 'destroy']);
    Route::get('/edit/{pid}', [App\Http\Controllers\leasesController::class, 'edit'])->name('Edit Lease');
    Route::post('/update/{pid}', [App\Http\Controllers\leasesController::class, 'update'])->name('Update Lease');
    Route::get('/search', [App\Http\Controllers\leasesController::class, 'search']);
});

Route::prefix('employees')->group(function () {
    Route::get('/', [App\Http\Controllers\employeesController::class, 'index'])->name('Employees');
    Route::get('/create', [App\Http\Controllers\employeesController::class, 'create'])->name('Create Employee');
    Route::post('/store', [App\Http\Controllers\employeesController::class, 'store']);
    Route::get('/delete/{pid}', [App\Http\Controllers\employeesController::class, 'destroy']);
    Route::get('/edit/{pid}', [App\Http\Controllers\employeesController::class, 'edit'])->name('Edit Employee');
    Route::post('/update/{pid}', [App\Http\Controllers\employeesController::class, 'update']);
    Route::get('/search', [App\Http\Controllers\employeesController::class, 'search']);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


