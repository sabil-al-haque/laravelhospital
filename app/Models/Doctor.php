<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'email',
        'phone',
        'speciality',
        'clinic',
        'address',
        'gender'
    ];

    public function patient()
    {
        return $this->hasMany(Patients::class, 'speciality', 'symtom');
    }

    public function Catagory()
    {
        return $this->belongsTo(Catagories::class, 'speciality', 'sub_catagory');
    }
}
