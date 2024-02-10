<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expertises extends Model
{
    use HasFactory;
    protected $fillable = [
        'title'
];

// public function doctors()
//     {
//         return $this->hasMany(Doctor::class, 'expertises_id','id');
//     }

}
