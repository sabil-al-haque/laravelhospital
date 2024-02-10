<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Availabilities extends Model
{
    use HasFactory;
    protected $fillable = [
            'title',
            'doctors_id',
            'day',
            'start_time',
            'end_time'
];

public function locatedoctor(){
    return Doctor::find($this->doctors_id);
}

}
