<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\hrm\HRMController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\auth\AuthController;
use App\Http\Controllers\appointments\AppointmentController;
use App\Http\Controllers\bills\BillController;
use App\Http\Controllers\pharmacy\PharmacyController;

/* login routes */

Route::get('/login', [AuthController::class, 'loginForm'])->name('auth.login');
Route::post('/login', [AuthController::class, 'login']);
/* end auth routes */

// Route::middleware(['auth'])->group(function () {
Route::permanentRedirect('/', '/qhims');
Route::prefix('/qhims')->group(function () {
    Route::get('/', function () {
        return view('quick_links', ['title' => 'QUICK LINKS']);
    });
    Route::get('/quick-links', function () {
        return view('quick_links', ['title' => 'QUICK LINKS']);
    })->name('quick-links');
    Route::prefix('auth/admin/')->group(function () {
        Route::get('/add-staff', [HRMController::class, 'addStaffForm'])->name('staff.add-new');
        Route::post('/add-staff', [HRMController::class, 'store'])->name('staff.add-new.store');
    });
    Route::resource('/admin/hrm', HRMController::class);
    Route::prefix('pharmacy')->group(function () {
        Route::controller(PharmacyController::class)->group(function () {
            Route::get('/', 'index')->name('pharmacy.index');
        });
    });
    /* patient routes */
    Route::controller(PatientController::class)->group(function () {
    });
    Route::prefix('appointment')->group(function () {
        Route::controller(AppointmentController::class)->group(function () {
            Route::get('/', 'index')->name('appointment.index');
        });
    });
    Route::prefix('bills')->group(function(){
        Route::controller(BillController::class)->group(function(){
            Route::get('/', 'index')->name('bills.index');
        });
    });
    Route::resource('/patients', PatientController::class);
    Route::get('/patient/add-new', [PatientController::class, 'createNewPatient'])->name('patient.add-new');
    Route::get('/patient/phone', [PatientController::class, 'searchByPhone']);
    Route::get('/patient/name', [PatientController::class, 'searchByName']);
    Route::put('/patient/edit/{id}', [PatientController::class, 'update'])->name('patient.update-info');

    /* appointment scheduling */
    Route::get('/schedule-appointment', [AppointmentController::class, 'create'])->name('appointment.schedule');
    Route::post('/schedule-appointment', [AppointmentController::class, 'show'])->name('appointment.schedule.post');
});
// });
