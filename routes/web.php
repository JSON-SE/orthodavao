<?php

use App\Http\Controllers\DataTableController;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
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

// Unauthenticated Routes
Route::middleware(['web'])->group(function () {
    Route::get('/login', Login::class)
    ->name('login');
    Route::get('/register', Register::class)
    ->name('register');
});

// Authenticated Users
Route::middleware(['auth'])->group(function () {
    // your routes goes here..
    Route::get('/', Dashboard::class)->name('dashboard');
    Route::post('/logout', [Login::class, 'logout'])
    ->name('logout');
});

// DataTale Routes
Route::middleware(['auth'])->group(function () {
    // your routes goes here..
    Route::get('/datatable/patient', [DataTableController::class, 'dashboardPatientTable'])->name('dashboard');
});
