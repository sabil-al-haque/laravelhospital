<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    use HasFactory;
    protected $fillable = [
            'name',
            'email',
            'phone',
            'gender',
            'address',
            'Password'
    ];

    public function doctor()
    {
        return $this->belongsTo(Doctor::class, 'speciality', 'symtom');
    }
}
