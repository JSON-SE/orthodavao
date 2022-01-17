<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Patient\PatientFind;
use App\Http\Livewire\Patient\PatientCreate;
use App\Http\Livewire\Patient\PatientUpdate;
use App\Http\Controllers\DataTableController;

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
    Route::get('/patient/create', PatientCreate::class)->name('patient-create');
    Route::get('/find/patient/{id}', PatientFind::class);
    Route::get('/update/patient/{id}', PatientUpdate::class);
});

// DataTale Routes
Route::middleware(['auth'])->group(function () {
    // your routes goes here..
    Route::get('/datatable/patient', [DataTableController::class, 'dashboardPatientTable'])->name('patient-table');
});
