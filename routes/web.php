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

Route::get('/patient', [HospitalController::class, 'p_index'])->name('doctor.p_index');
 Route::get('/create_patient', [HospitalController::class, 'p_create'])->name('doctor.p_create');
 Route::post('/patient', [HospitalController::class, 'store_patient'])->name('patient.store');
 


 


 Route::get('/catagory', [HospitalController::class, 'catagory'])->name('catagory.store');
 Route::get('/create_catagory', [HospitalController::class, 'catagory_create'])->name('doctor.catagory');

 Route::post('/catagory', [HospitalController::class, 'store_catagory'])->name('catagory.store');


 Route::get('doctor/{id}/edit',[HospitalController::class, 'dedit']);
 Route::put('doctor/{id}/edit',[HospitalController::class, 'dupdate']);
 Route::get('doctor/{id}/delete',[HospitalController::class, 'ddelete']);


 Route::get('admin',[HospitalController::class, 'admin_index']);

