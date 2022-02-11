<?php

use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Auth\Login;
use App\Http\Livewire\Auth\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Patient\PatientFind;
use App\Http\Controllers\RequestController;
use App\Http\Livewire\Patient\PatientCreate;
use App\Http\Livewire\Patient\PatientUpdate;
use App\Http\Controllers\DataTableController;
use App\Http\Controllers\ConsultationController;
use App\Http\Livewire\Consultation\ConsultationShow;
use App\Http\Livewire\Consultation\ConsultationIndex;
use App\Http\Livewire\Consultation\ConsultationCreate;
use App\Http\Livewire\Consultation\ConsultationUpdate;
use App\Http\Livewire\Request\Xray;

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
    Route::get('/consultation/destroy/{id}', [ConsultationController::class, 'destroyConsultation']);
});
// DataTale Routes
Route::middleware(['auth'])->group(function () {
    // your routes goes here..
    Route::get('/datatable/patient', [DataTableController::class, 'dashboardPatientTable'])->name('patient-table');
    Route::get('/datatable/consultation', [DataTableController::class, 'consultationTable']);
});

// Request Routes
Route::middleware(['auth'])->group(function () {
    // Route::get('/patient/request/x-ray/{id}', Xray::class);

    // Xray Routes
    Route::get('/patient/request/x-ray/{id}', [RequestController::class, 'xrayIndex']);
    Route::get('/request/xray', [RequestController::class, 'requestXrayDataTable']);
    Route::post('/request/xray/patient/{id}', [RequestController::class, 'generateXray']);

    // Ultrasound Routes
    Route::get('/patient/request/ultrasound/{id}', [RequestController::class, 'ultrasoundIndex']);
    Route::get('/request/ultrasound', [RequestController::class, 'requestUltrasoundDataTable']);
    Route::post('/request/ultrasound/patient/{id}', [RequestController::class, 'generateUltrasound']);

    // Laboratory Routes
    Route::get('/patient/request/laboratory/{id}', [RequestController::class, 'laboratoryIndex']);
    Route::get('/request/laboratory', [RequestController::class, 'requestLaboratoryDataTable']);
    Route::post('/request/laboratory/patient/{id}', [RequestController::class, 'generateLaboratory']);

    // MRI Routes
    Route::get('/patient/request/mri/{id}', [RequestController::class, 'mriIndex']);
    Route::get('/request/mri', [RequestController::class, 'requestMriDataTable']);
    Route::post('/request/mri/patient/{id}', [RequestController::class, 'generateMRI']);

    // Ct Routes
    Route::get('/patient/request/ct/{id}', [RequestController::class, 'ctIndex']);
    Route::get('/request/ct', [RequestController::class, 'requestCtDataTable']);
    Route::post('/request/ct/patient/{id}', [RequestController::class, 'generateCT']);

    // Prescription Routes
    Route::get('/patient/request/prescription/{id}', [RequestController::class, 'prescriptionIndex']);
    Route::get('/request/prescription', [RequestController::class, 'requestPrescriptionDataTable']);
    Route::post('/request/prescription/patient/{id}', [RequestController::class, 'generatePrescription']);

    // Referral Routes
    Route::get('/patient/request/referral/{id}', [RequestController::class, 'referralIndex']);
    Route::get('/request/referral', [RequestController::class, 'requestReferralDataTable']);
    Route::post('/request/referral/patient/{id}', [RequestController::class, 'generateReferral']);

    // Admission Routes
    Route::get('/patient/request/admission/{id}', [RequestController::class, 'admissionIndex']);
    Route::get('/request/admission', [RequestController::class, 'requestAdmissionDataTable']);
    Route::post('/request/admission/patient/{id}', [RequestController::class, 'generateAdmission']);

    // Medical Certificate Routes
    Route::get('/patient/request/medical-certificate/{id}', [RequestController::class, 'medicalCertificateIndex']);
    Route::get('/request/medical-certificate', [RequestController::class, 'requestMedicalCertificateDataTable']);
    Route::post('/request/medical-certificate/patient/{id}', [RequestController::class, 'generateMedicalCertificate']);
});
