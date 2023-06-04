<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'Bed_no',
        'name',
        'age',
        'gender',
        'condition',
        'heart_rate',
        'resperatory_pressure',
        'blood_pressure',
        'oxygen_level',
        'temperature'

    ];
}
