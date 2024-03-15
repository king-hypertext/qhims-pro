<?php

use App\Http\Controllers\hrm\HRMController;
use App\Http\Controllers\PatientController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::redirect('/', '/qhims');
Route::prefix('qhims')->group(function () {
    Route::get('/', function () {
        return view('layout.page');
        // return view('auth.login', ['title'=>'login']);
    });
    Route::resource('/admin/hrm', HRMController::class);
    /* patient routes */
    Route::resource('/patients', PatientController::class);
    Route::get('/patient/add-new', [PatientController::class, 'createNewPatient'])->name('patient.add-new');
});
