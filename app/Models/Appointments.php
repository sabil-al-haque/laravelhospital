<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointments extends Model
{
    use HasFactory;
    protected $fillable = [
            'availabilities_id',
            'doctor_id',
            'patient_id',
            'diease_id'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'speciality', 'symtom');
    }
}
