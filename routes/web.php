<?php

use App\Http\Middleware\Authenticate;

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

// Route::view('/', 'login1');
Route::view('/', 'auth.login1')->name('login1');

Auth::routes();

// Admin Routes
Route::get('/admin', [App\Http\Controllers\adminController::class, 'index'])->name('Dashboard')->middleware('auth');






Route::middleware([Authenticate::class])->group(function () {

    // Properties
    Route::prefix('properties')->group(function () {
        Route::get('/', [App\Http\Controllers\propertiesController::class, 'index'])->name('Properties');
        Route::get('/create', [App\Http\Controllers\propertiesController::class, 'create']);
        Route::post('/store', [App\Http\Controllers\propertiesController::class, 'store'])->name('create.property');
        Route::get('/delete/{pid}', [App\Http\Controllers\propertiesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\propertiesController::class, 'edit']);
        Route::post('/update/{pid}', [App\Http\Controllers\propertiesController::class, 'update'])->name('update.property');
        Route::get('/search', [App\Http\Controllers\propertiesController::class, 'search']);
    });

    // Leases
    Route::prefix('leases')->group(function () {
        Route::get('/', [App\Http\Controllers\leasesController::class, 'index'])->name('Leases');
        Route::get('/create', [App\Http\Controllers\leasesController::class, 'create'])->name('Create Lease');
        Route::post('/store', [App\Http\Controllers\leasesController::class, 'store']);
        Route::get('/delete/{pid}', [App\Http\Controllers\leasesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\leasesController::class, 'edit'])->name('Edit Lease');
        Route::post('/update/{pid}', [App\Http\Controllers\leasesController::class, 'update'])->name('Update Lease');
        Route::get('/search', [App\Http\Controllers\leasesController::class, 'search']);
    });

    // Employess
    Route::prefix('employees')->group(function () {
        Route::get('/', [App\Http\Controllers\employeesController::class, 'index'])->name('Employees');
        Route::get('/create', [App\Http\Controllers\employeesController::class, 'create'])->name('Create Employee');
        Route::post('/store', [App\Http\Controllers\employeesController::class, 'store']);
        Route::get('/delete/{pid}', [App\Http\Controllers\employeesController::class, 'destroy']);
        Route::get('/edit/{pid}', [App\Http\Controllers\employeesController::class, 'edit'])->name('Edit Employee');
        Route::post('/update/{pid}', [App\Http\Controllers\employeesController::class, 'update']);
        Route::get('/search', [App\Http\Controllers\employeesController::class, 'search']);
    });
 
});






Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


