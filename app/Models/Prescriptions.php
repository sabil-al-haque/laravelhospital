<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    use HasFactory;

    protected $fillable = [
            'appointments_id',
            'patients_id',
            'doctors_id',
            'date',
            'medication',
            'additional_inf',
            'sign_of_doctor',
            'signed_date'

    ];

    public function appointment()
    {
        // return Expertises::find($this->experties_id);
        return Appointments::where('id',$this->appointments_id)->get()->first();
    }

    public function patient()
    {
        // return Expertises::find($this->experties_id);
        return Patients::where('id',$this->patients_id)->get()->first();
    }

    public function doctor()
    {
        // return Expertises::find($this->experties_id);
        return Doctor::where('id',$this->doctors_id)->get()->first();
    }

    // public function doctor()
    // {
    //     return $this->belongsTo(Doctor::class, 'speciality', 'symtom');
    // }
}
