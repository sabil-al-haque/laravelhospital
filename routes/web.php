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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [HospitalController::class, 'index']);
Route::get('/home', [HospitalController::class, 'redirect']);


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


//  Route::get('/login', [HospitalController::class, 'login']);
//  Route::get('/createaccount', [HospitalController::class, 'reg']);
//  Route::get('/profile', [HospitalController::class, 'profile']);


 Route::get('/availability', [HospitalController::class, 'availability_index']);
 Route::get('/create_availability', [HospitalController::class, 'availability_create']);
 Route::post('/availability', [HospitalController::class, 'store_availability']);
 Route::get('availability/{id}/edit',[HospitalController::class, 'availability_edit']);
 Route::put('availability/{id}/edit',[HospitalController::class, 'availability_update']);
 Route::get('availability/{id}/delete',[HospitalController::class, 'availability_delete']);


 Route::get('/disease', [HospitalController::class, 'disease_index']);
 Route::get('/create_disease', [HospitalController::class, 'disease_create']);
 Route::post('/disease', [HospitalController::class, 'store_disease']);
 Route::get('disease/{id}/edit',[HospitalController::class, 'disease_edit']);
 Route::put('disease/{id}/edit',[HospitalController::class, 'disease_update']);
 Route::get('disease/{id}/delete',[HospitalController::class, 'disease_delete']);


 Route::get('/experties', [HospitalController::class, 'experties_index']);
 Route::get('/create_experties', [HospitalController::class, 'experties_create']);
 Route::post('/experties', [HospitalController::class, 'store_experties']);
 Route::get('experties/{id}/edit',[HospitalController::class, 'experties_edit']);
 Route::put('experties/{id}/edit',[HospitalController::class, 'experties_update']);
 Route::get('experties/{id}/delete',[HospitalController::class, 'experties_delete']);


 Route::get('/admin',[HospitalController::class, 'admin_index']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
