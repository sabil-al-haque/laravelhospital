<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catagories extends Model
{
    use HasFactory;
    protected $fillable = [
        'catagory',
        'sub_catagory'
    ];



}
