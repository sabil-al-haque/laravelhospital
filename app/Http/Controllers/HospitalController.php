<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Doctor;
use App\Models\Patients;
use App\Models\Catagories;

class HospitalController extends Controller
{
    public function d_index(){
        $doctors = Doctor::all();
        
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
        
        return view('hospital.catagory');
        
    }

    public function catagory_create(){
        
        return view('hospital.create_catagory');
        
    }



    public function p_index(){
        
        return view('hospital.patient');
        
    }
    public function p_create(){
        
        return view('hospital.create_patient');
        
    }
    public function admin_index(){
        
        return view('admin.index');
        
    }



    public function dedit (int $id){
        $doctors = Doctor::findOrFail($id);
        return $doctors;
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
}
