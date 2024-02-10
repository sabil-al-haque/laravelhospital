<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patients;
use App\Models\Catagories;
use App\Models\Appointments;
use App\Models\Prescriptions;
use App\Models\Availabilities;
use App\Models\Expertises;
use App\Models\Diseases;

class HospitalController extends Controller
{

    public function home(){

        return view('hospital.home');

    }
    public function d_index(){

        $doctors = Doctor::get();
        return view('hospital.doctor', ['doctors' => $doctors]);
    }

    public function d_create(){
        return view('hospital.create_doctor');
    }

    public function store_doctor(Request $request){
        $request->validate([
            'name' => 'required|max:30|string',
            'email' => 'required|email',
            'phone' => 'required|max:15|string',
            'gender' => 'required|string',
            'address' => 'required|max:191|string',
            'degree' => 'required|max:191|string',
            'clinic' => 'required|max:191|string',
            'Password' => 'required|max:30|string',
            'experties_id' => 'required|max:30|integer',

        ]);
        Doctor::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
            'address'=> $request->address,
            'degree'=> $request->degree,
            'clinic'=> $request->clinic,
            'Password'=> $request->Password,
            'experties_id'=> $request->experties_id,


        ]);
        return redirect('create_doctor')->with('status','Doctor Created');
    }

    public function dedit (int $id){
        $doctors = Doctor::findOrFail($id);
        return view('hospital.doctor_edit',compact('doctors'));
    }
    public function dupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:30|string',
            'email' => 'required|email',
            'phone' => 'required|max:15|string',
            'gender' => 'required|string',
            'address' => 'required|max:191|string',
            'degree' => 'required|max:191|string',
            'clinic' => 'required|max:191|string',
            'Password' => 'required|max:30|string',

        ]);
        Doctor::findOrFail($id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
            'address'=> $request->address,
            'degree'=> $request->degree,
            'clinic'=> $request->clinic,
            'Password'=> $request->Password,


        ]);
        return redirect()->back()->with('status','Doctor Updated');
    }
    public function ddelete(int $id){
        $doctors = Doctor::findOrFail($id);
        $doctors->delete();
        return redirect()->back()->with('status','Doctor Deleted');
    }
    public function p_index(){

        $patients = Patients::get();

        return view('hospital.patient', ['patients' => $patients]);

    }
    public function p_create(){
        return view('hospital.create_patient');

    }
    public function store_patient(Request $request){
        $request->validate([
            'name'=> 'required|max:30|string',
            'email'=> 'required|email',
            'phone'=> 'required|max:15|string',
            'gender'=> 'required|string',
            'address'=> 'required|max:191|string',
            'Password'=> 'required|max:30|string',

        ]);
        Patients::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
            'address'=> $request->address,
            'Password'=> $request->Password,

        ]);
        return redirect('create_patient')->with('status','Patient Created');
    }
    public function pedit (int $id){
        $patients = Patients::findOrFail($id);
        return view('hospital.patient_edit',compact('patients'));
    }

    public function pupdate(Request $request, int $id){
        $request->validate([
            'name'=> 'required|max:30|string',
            'email'=> 'required|email',
            'phone'=> 'required|max:15|string',
            'gender'=> 'required|string',
            'address'=> 'required|max:191|string',
            'Password'=> 'required|max:30|string',

        ]);
        Patients::findOrFail($id)->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'gender'=> $request->gender,
            'address'=> $request->address,
            'Password'=> $request->Password,

        ]);
        return redirect()->back()->with('status','Patient Updated');
    }

    public function pdelete(int $id){
        $patients = Patients::findOrFail($id);
        $patients->delete();
        return redirect()->back()->with('status','Patient Deleted');
    }

    public function store_catagory(Request $request){
        $request->validate([
            'catagory' => 'required|max:25|string',
            'sub_catagory' => 'required|max:25|string',

        ]);
        Catagories::create([
        'catagory'=> $request->catagory,
        'sub_catagory'=> $request->sub_catagory,
        ]);
        return redirect('create_catagory')->with('status','catagories Created');
    }

    public function catagory(){
        $categories  = Catagories ::get() ;

        return view('hospital.catagory',['categories' => $categories]);
    }

    public function catagory_create(){

        return view('hospital.create_catagory');
    }

    public function cedit (int $id){
        $categories = Catagories::findOrFail($id);
        return view('hospital.category_edit',compact('categories'));
    }

    public function cupdate(Request $request, int $id){
        $request->validate([
            'catagory' => 'required|max:25|string',
            'sub_catagory' => 'required|max:25|string',

        ]);
        Catagories::findOrFail($id)->update([
        'catagory'=> $request->catagory,
        'sub_catagory'=> $request->sub_catagory,

        ]);
        return redirect()->back()->with('status','Doctor Update');
    }
    public function cdelete(int $id){
        $categories = Catagories::findOrFail($id);
        $categories->delete();
        return redirect()->back()->with('status','Category Deleted');

    }

    public function a_index(){

        $appointments = Appointments::get();
        return view('hospital.appointment', ['appointments' => $appointments]);
    }

    public function a_create(){
        return view('hospital.create_appointment');
    }

    public function store_appointment(Request $request){
        $request->validate([
            'availabilities_id'=> 'required',
            'doctor_id'=> 'required',
            'patient_id'=> 'required',
            'diease_id'=> 'required',

        ]);
        Appointments::create([
            'availabilities_id'=> $request->availabilities_id,
            'doctor_id'=> $request->doctor_id,
            'patient_id'=> $request->patient_id,
            'diease_id'=> $request->diease_id,

        ]);
        return redirect('create_appointment')->with('status','Appointments Created');
    }

    public function aedit (int $id){
        $appointments = Appointments::findOrFail($id);
        return view('hospital.appointment_edit',compact('appointments'));
    }

    public function aupdate(Request $request, int $id){
        $request->validate([
            'availabilities_id'=> 'required',
            'doctor_id'=> 'required',
            'patient_id'=> 'required',
            'diease_id'=> 'required',

        ]);
        Appointments::findOrFail($id)->update([
            'availabilities_id'=> $request->availabilities_id,
            'doctor_id'=> $request->doctor_id,
            'patient_id'=> $request->patient_id,
            'diease_id'=> $request->diease_id,

        ]);
        return redirect()->back()->with('status','Appointments Update');
    }

    public function adelete(int $id){
        $appointments = Appointments::findOrFail($id);
        $appointments->delete();
        return redirect()->back()->with('status','Appointments Deleted');

    }

    public function prescription_index(){

        $patientData = Prescriptions::get();
        return view('hospital.prescription', ['patientData' => $patientData]);

    }

    public function prescription_create(){
        return view('hospital.create_prescription');

    }


    public function store_prescription(Request $request){
        $request->validate([
            'appointments_id'=> 'required',
            'patients_id'=> 'required',
            'doctors_id'=> 'required',
            'date'=> 'required|max:191|string',
            'medication'=> 'required|max:191|string',
            'additional_inf'=> 'required|max:191|string',
            'sign_of_doctor'=> 'required|max:191|string',
            'signed_date'=> 'required|max:191|string',
        ]);
        Prescriptions::create([
            'appointments_id'=> $request->appointments_id,
            'patients_id'=> $request->patients_id,
            'doctors_id'=> $request->doctors_id,
            'date'=> $request->date,
            'medication'=> $request->medication,
            'additional_inf'=> $request->additional_inf,
            'sign_of_doctor'=> $request->sign_of_doctor,
            'signed_date'=> $request->signed_date,

        ]);
        return redirect('create_prescription')->with('status','Profile Created');
    }
    public function prescription_edit (int $id){
        $patientData = Prescriptions::findOrFail($id);
        return view('hospital.prescription_edit',compact('patientData'));
    }

    public function prescription_update(Request $request, int $id){
        $request->validate([
            'appointments_id'=> 'required',
            'patients_id'=> 'required',
            'doctors_id'=> 'required',
            'date'=> 'required|max:191|string',
            'medication'=> 'required|max:191|string',
            'additional_inf'=> 'required|max:191|string',
            'sign_of_doctor'=> 'required|max:191|string',
            'signed_date'=> 'required|max:191|string',
        ]);
        Prescriptions::findOrFail($id)->update([
            'appointments_id'=> $request->appointments_id,
            'patients_id'=> $request->patients_id,
            'doctors_id'=> $request->doctors_id,
            'date'=> $request->date,
            'medication'=> $request->medication,
            'additional_inf'=> $request->additional_inf,
            'sign_of_doctor'=> $request->sign_of_doctor,
            'signed_date'=> $request->signed_date,

        ]);
        return redirect()->back()->with('status','prescription Update');
    }
    public function prescription_delete(int $id){
        $patientData = Prescriptions::findOrFail($id);
        $patientData->delete();
        return redirect()->back()->with('status','prescription Deleted');
    }
    public function admin_index(){
        return view('admin.index');
    }


    public function profile(){
        return view('hospital.profile');
    }

    public function login(){
        return view('hospital.login');
    }


    public function reg(){
        return view('hospital.createaccount');
    }


    public function availability_index(){

        $availabilities = Availabilities::get();
        return view('hospital.availability', ['availabilities' => $availabilities]);

    }

    public function availability_create(){
        return view('hospital.create_availability');

    }


    public function store_availability(Request $request){
        $request->validate([
            'title'=> 'required',
            'doctors_id'=> 'required',
            'day'=> 'required',
            'start_time'=> 'required',
            'end_time'=> 'required',
        ]);
        Availabilities::create([
            'title'=> $request->title,
            'doctors_id'=> $request->doctors_id,
            'day'=> $request->day,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,

        ]);
        return redirect('create_availability')->with('status','Availability Created');
    }
    public function availability_edit (int $id){
        $availabilities = Availabilities::findOrFail($id);
        return view('hospital.edit_availability',compact('availabilities'));
    }

    public function availability_update(Request $request, int $id){
        $request->validate([
            'title'=> 'required',
            'doctors_id'=> 'required',
            'day'=> 'required',
            'start_time'=> 'required',
            'end_time'=> 'required',
        ]);
        Availabilities::findOrFail($id)->update([
            'title'=> $request->title,
            'doctors_id'=> $request->doctors_id,
            'day'=> $request->day,
            'start_time'=> $request->start_time,
            'end_time'=> $request->end_time,

        ]);
        return redirect()->back()->with('status','Availability Update');
    }
    public function availability_delete(int $id){
        $availabilities = Availabilities::findOrFail($id);
        $availabilities->delete();
        return redirect()->back()->with('status','Availability Deleted');
    }


    public function disease_index(){

        $disease = Diseases::get();
        return view('hospital.disease', ['disease' => $disease]);

    }

    public function disease_create(){
        return view('hospital.create_disease');

    }


    public function store_disease(Request $request){
        $request->validate([
            'disease_name'=> 'required',
        ]);
        Diseases::create([
            'disease_name'=> $request->disease_name,

        ]);
        return redirect('create_disease')->with('status','Disease Created');
    }
    public function disease_edit (int $id){
        $disease = Diseases::findOrFail($id);
        return view('hospital.edit_disease',compact('disease'));
    }

    public function disease_update(Request $request, int $id){
        $request->validate([
            'disease_name'=> 'required',
        ]);
        Diseases::findOrFail($id)->update([
            'disease_name'=> $request->disease_name,

        ]);
        return redirect()->back()->with('status','Disease Update');
    }
    public function disease_delete(int $id){
        $disease = Diseases::findOrFail($id);
        $disease->delete();
        return redirect()->back()->with('status','Disease Deleted');
    }


    public function experties_index(){

        $experties = Expertises::get();
        return view('hospital.experties', ['experties' => $experties]);

    }

    public function experties_create(){
        return view('hospital.create_experties');

    }


    public function store_experties(Request $request){
        $request->validate([
            'title'=> 'required',
        ]);
        Expertises::create([
            'title'=> $request->title,

        ]);
        return redirect('create_experties')->with('status','Experties Created');
    }
    public function experties_edit (int $id){
        $experties = Expertises::findOrFail($id);
        return view('hospital.edit_experties',compact('experties'));
    }

    public function experties_update(Request $request, int $id){
        $request->validate([
            'title'=> 'required',
        ]);
        Expertises::findOrFail($id)->update([
            'title'=> $request->title,

        ]);
        return redirect()->back()->with('status','Experties Update');
    }
    public function experties_delete(int $id){
        $experties = Expertises::findOrFail($id);
        $experties->delete();
        return redirect()->back()->with('status','Experties Deleted');
    }

}
