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

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'speciality', 'symtom');
    }
}
