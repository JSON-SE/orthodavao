<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Patient\PatientFind;
use App\Http\Livewire\Patient\PatientCreate;
use App\Http\Livewire\Patient\PatientUpdate;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\ConsultationController;
use App\Http\Livewire\Consultation\ConsultationShow;
use App\Http\Livewire\Consultation\ConsultationIndex;
use App\Http\Livewire\Consultation\ConsultationCreate;
use App\Http\Livewire\Consultation\ConsultationUpdate;

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
    Route::get('/consultation/index', ConsultationIndex::class)->name('consultation-index');
    Route::get('/consultation/create/{id}', ConsultationCreate::class);
    Route::post('/consultation/create', [ConsultationController::class, 'store'])->name('post-consultation');
    Route::get('/find/consultation/{id}', ConsultationShow::class);
    Route::get('/consultation/update/{id}', ConsultationUpdate::class);
    Route::get('/find/consultation/remove/{id}', [ConsultationController::class, 'destroy']);
    Route::post('/consultation/update/{id}', [ConsultationController::class, 'update']);
});
// DataTale Routes
Route::middleware(['auth'])->group(function () {
    // your routes goes here..
    Route::get('/datatable/patient', [DataTableController::class, 'dashboardPatientTable'])->name('patient-table');
    Route::get('/datatable/consultation', [DataTableController::class, 'consultationTable']);
});
