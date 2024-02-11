<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
            'appointment_name',
            'availabilities_id',
            'doctor_id',
            'patient_id',
            'diease_id'
    ];


    public function availability()
    {
        // return Expertises::find($this->experties_id);
        return Availabilities::where('id',$this->availabilities_id)->get()->first();
    }

    public function doctor()
    {
        // return Expertises::find($this->experties_id);
        return Doctor::where('id',$this->doctor_id)->get()->first();
    }

    public function patient()
    {
        // return Expertises::find($this->experties_id);
        return Patients::where('id',$this->patient_id)->get()->first();
    }
    public function disease()
    {
        // return Expertises::find($this->experties_id);
        return Diseases::where('id',$this->diease_id)->get()->first();
    }




    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class, 'speciality', 'symtom');
    // }
}
