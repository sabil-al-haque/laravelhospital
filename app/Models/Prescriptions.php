<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prescriptions extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'age',
        'date',
        'phone',
        'email',
        'address',
        'medication',
        'additional_inf',
        'sign_of_doctor',
        'signed_date'
        
    ];
}
