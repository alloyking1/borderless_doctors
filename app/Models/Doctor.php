<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $fillable = [
        'phone',
        'ssn',
        'address',
        'requestDetails',
        'users_id',
        'passport',
        'passport_back'
    ];
}
