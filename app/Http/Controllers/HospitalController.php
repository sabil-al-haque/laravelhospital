<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patients;
use App\Models\Catagories;
use App\Models\Appointments;
use App\Models\Prescriptions;

class HospitalController extends Controller
{
    public function d_index(){

        $doctors = Doctor::get();

        return view('hospital.doctor', ['doctors' => $doctors]);
        
    }

    public function d_create(){
        
        return view('hospital.create_doctor');
        
    }


    public function store_doctor(Request $request){
        $request->validate([
            'name' => 'required|max:25|string',
            
            'email' => 'required|email',
            
            'phone' => 'required|max:11',
            'speciality' => 'required|max:25|string',
            'clinic' => 'required|max:25|string',
            'address' => 'required|max:191|string',
            'gender' => 'required|max:25|string',
            
    
        ]);
        Doctor::create([
        'name'=> $request->name,
        
        'email'=> $request->email,
        'phone'=> $request->phone,
        'speciality'=> $request->speciality,
        'clinic'=> $request->clinic,
        

        'address'=> $request->address,
        'gender'=> $request->gender,
    
        ]);
        return redirect('create_doctor')->with('status','Profile Created');
    }



    public function dedit (int $id){
        $doctors = Doctor::findOrFail($id);
        return view('hospital.doctor_edit',compact('doctors'));
    }




    public function dupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:25|string',           
            'email' => 'required|email',           
            'phone' => 'required|max:11',
            'speciality' => 'required|max:25|string',
            'clinic' => 'required|max:25|string',
            'address' => 'required|max:191|string',
            'gender' => 'required|max:25|string',
            
    
        ]);
        Doctor::create([
        'name'=> $request->name,      
        'email'=> $request->email,
        'phone'=> $request->phone,
        'speciality'=> $request->speciality,
        'clinic'=> $request->clinic,
        'address'=> $request->address,
        'gender'=> $request->gender,
    
        ]);
        return redirect()->back()->with('status','Doctor Update');
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
            'name' => 'required|max:25|string',
            
            'email' => 'required|email',
            
            'phone' => 'required|max:11',
            'symtom' => 'required|max:25|string',
            'disease' => 'required|max:25|string',
            'gender' => 'required|max:25|string',
            'address' => 'required|max:191|string',
            
            
    
        ]);
        Patients::create([
        'name'=> $request->name,
        
        'email'=> $request->email,
        'phone'=> $request->phone,
        'symtom'=> $request->symtom,
        'disease'=> $request->disease,
        
        'gender'=> $request->gender,
        'address'=> $request->address,
        
    
        ]);
        return redirect('create_patient')->with('status','Profile Created');
    }


    public function pedit (int $id){
        $patients = Patients::findOrFail($id);
        return view('hospital.patient_edit',compact('patients'));
    }



    public function pupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:25|string',           
            'email' => 'required|email',           
            'phone' => 'required|max:11',
            'symtom' => 'required|max:25|string',
            'disease' => 'required|max:25|string',
            'gender' => 'required|max:25|string',
            'address' => 'required|max:191|string',
            
            
    
        ]);
        Patients::create([
        'name'=> $request->name,      
        'email'=> $request->email,
        'phone'=> $request->phone,
        'symtom'=> $request->symtom,
        'disease'=> $request->disease,
        'gender'=> $request->gender,
        'address'=> $request->address,
        
    
        ]);
        return redirect()->back()->with('status','Patient Update');
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
        Catagories::create([
        'catagory'=> $request->catagory,
        'sub_catagory'=> $request->sub_catagory,
        
        ]);
        return redirect()->back()->with('status','Doctor Update');
    }

    public function cdelete(int $id){
        $doctors = Catagories::findOrFail($id);
        $doctors->delete();
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
            'name' => 'required|max:25|string',
            'age' => 'required|max:191|string',
            'gender' => 'required|max:191|string',
            'phone' => 'required|max:191|string',
            'email' => 'required|email',
            'address' => 'required|max:191|string',
            'city' => 'required|max:191|string',
            'area' => 'required|max:191|string',
            'zip' => 'required|max:191|string',
            'data' => 'required|max:191|string',
            'availability' => 'required|max:191|string',
            'start' => 'required|max:191|string',
            'end' => 'required|max:191|string',
            'status' => 'required|max:191|string',
            
        ]);
        Appointments::create([
        'name'=> $request->name,
        'age'=> $request->age,
        'gender'=> $request->gender,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address,
        'city'=> $request->city,
        'area'=> $request->area,
        'zip'=> $request->zip,
        'data'=> $request->data,
        'availability'=> $request->availability,
        'start'=> $request->start,
        'end'=> $request->end,
        'status'=> $request->status,
    
    
        ]);
        return redirect('create_appointment')->with('status','Appointments Created');
    }



    public function aedit (int $id){
        $appointments = Appointments::findOrFail($id);
        return view('hospital.appointment_edit',compact('appointments'));
    }




    public function aupdate(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:25|string',
            'age' => 'required|max:191|string',
            'gender' => 'required|max:191|string',
            'phone' => 'required|max:191|string',
            'email' => 'required|email',
            'address' => 'required|max:191|string',
            'city' => 'required|max:191|string',
            'area' => 'required|max:191|string',
            'zip' => 'required|max:191|string',
            'data' => 'required|max:191|string',
            'availability' => 'required|max:191|string',
            'start' => 'required|max:191|string',
            'end' => 'required|max:191|string',
            'status' => 'required|max:191|string',
            
        ]);
        Appointments::create([
        'name'=> $request->name,
        'age'=> $request->age,
        'gender'=> $request->gender,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address,
        'city'=> $request->city,
        'area'=> $request->area,
        'zip'=> $request->zip,
        'data'=> $request->data,
        'availability'=> $request->availability,
        'start'=> $request->start,
        'end'=> $request->end,
        'status'=> $request->status,
    
    
        ]);
        return redirect()->back()->with('status','Appointments Update');
    }

    public function adelete(int $id){
        $appointments = Appointments::findOrFail($id);
        $appointments->delete();
        return redirect()->back()->with('status','Appointments Deleted');

    }




    public function prescription_index(){

        $prescriptions = Prescriptions::get();

        return view('hospital.prescription', ['prescriptions' => $prescriptions]);
        
    }

    public function prescription_create(){
        
        return view('hospital.create_prescription');
        
    }


    public function store_prescription(Request $request){
        $request->validate([
            'name' => 'required|max:25|string',
            'age' => 'required|max:191|string',
            'date' => 'required|max:191|string',
            'phone' => 'required|max:191|string',
            'email' => 'required|max:191|string',
            'address' => 'required|max:191|string',
            'medication' => 'required|max:191|string',
            'additional_inf' => 'required|max:191|string',
            'sign_of_doctor' => 'required|max:191|string',
            'signed_date' => 'required|max:191|string',
            
            
    
        ]);
        Prescriptions::create([
        'name'=> $request->name,
        'age'=> $request->age,
        'date'=> $request->date,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address,
        'medication'=> $request->medication,
        'additional_inf'=> $request->additional_inf,
        'sign_of_doctor'=> $request->sign_of_doctor,
        'signed_date'=> $request->signed_date,
    
        ]);
        return redirect('create_prescription')->with('status','Profile Created');
    }



    public function prescription_edit (int $id){
        $prescriptions = Prescriptions::findOrFail($id);
        return view('hospital.prescription_edit',compact('prescriptions'));
    }




    public function prescription_update(Request $request, int $id){
        $request->validate([
            'name' => 'required|max:25|string',
            'age' => 'required|max:191|string',
            'date' => 'required|max:191|string',
            'phone' => 'required|max:191|string',
            'email' => 'required|max:191|string',
            'address' => 'required|max:191|string',
            'medication' => 'required|max:191|string',
            'additional_inf' => 'required|max:191|string',
            'sign_of_doctor' => 'required|max:191|string',
            'signed_date' => 'required|max:191|string',
            
            
    
        ]);
        Prescriptions::create([
        'name'=> $request->name,
        'age'=> $request->age,
        'date'=> $request->date,
        'phone'=> $request->phone,
        'email'=> $request->email,
        'address'=> $request->address,
        'medication'=> $request->medication,
        'additional_inf'=> $request->additional_inf,
        'sign_of_doctor'=> $request->sign_of_doctor,
        'signed_date'=> $request->signed_date,
    
        ]);
        return redirect()->back()->with('status','prescription Update');
    }

    public function prescription_delete(int $id){
        $prescriptions = Prescriptions::findOrFail($id);
        $prescriptions->delete();
        return redirect()->back()->with('status','prescription Deleted');

    }



    public function admin_index(){
        
        return view('admin.index');
        
    }





}

