<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HospitalController;

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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/doctor', [HospitalController::class, 'd_index'])->name('doctor.d_index');
Route::get('/create_doctor', [HospitalController::class, 'd_create'])->name('doctor.d_create');
Route::post('/doctor', [HospitalController::class, 'store_doctor'])->name('doctor.store');
Route::get('doctor/{id}/edit',[HospitalController::class, 'dedit']);
Route::put('doctor/{id}/edit',[HospitalController::class, 'dupdate']);
Route::get('doctor/{id}/delete',[HospitalController::class, 'ddelete']);



 Route::get('/patient', [HospitalController::class, 'p_index'])->name('doctor.p_index');
 Route::get('/create_patient', [HospitalController::class, 'p_create'])->name('doctor.p_create');
 Route::post('/patient', [HospitalController::class, 'store_patient'])->name('patient.store');
 Route::get('patient/{id}/edit',[HospitalController::class, 'pedit']);
 Route::put('patient/{id}/edit',[HospitalController::class, 'pupdate']);
 Route::get('patient/{id}/delete',[HospitalController::class, 'pdelete']);
 


 


 Route::get('/catagory', [HospitalController::class, 'catagory'])->name('catagory.store');
 Route::get('/create_catagory', [HospitalController::class, 'catagory_create'])->name('doctor.catagory');
 Route::post('/catagory', [HospitalController::class, 'store_catagory'])->name('catagory.store');
 Route::get('catagory/{id}/edit',[HospitalController::class, 'cedit']);
 Route::put('catagory/{id}/edit',[HospitalController::class, 'cupdate']);
 Route::get('catagory/{id}/delete',[HospitalController::class, 'cdelete']);





 Route::get('/appointment', [HospitalController::class, 'a_index'])->name('appointment.d_index');
 Route::get('/create_appointment', [HospitalController::class, 'a_create'])->name('appointment.d_create');
 Route::post('/appointment', [HospitalController::class, 'store_appointment'])->name('appointment.store');
 Route::get('appointment/{id}/edit',[HospitalController::class, 'aedit']);
 Route::put('appointment/{id}/edit',[HospitalController::class, 'aupdate']);
 Route::get('appointment/{id}/delete',[HospitalController::class, 'adelete']);



 Route::get('/prescription', [HospitalController::class, 'prescription_index'])->name('prescription.d_index');
 Route::get('/create_prescription', [HospitalController::class, 'prescription_create'])->name('prescription.d_create');
 Route::post('/prescription', [HospitalController::class, 'store_prescription'])->name('prescription.store');
 Route::get('prescription/{id}/edit',[HospitalController::class, 'prescription_edit']);
 Route::put('prescription/{id}/edit',[HospitalController::class, 'prescription_update']);
 Route::get('prescription/{id}/delete',[HospitalController::class, 'prescription_delete']);



 Route::get('admin',[HospitalController::class, 'admin_index']);

