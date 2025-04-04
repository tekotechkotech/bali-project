<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employees extends Model
{
    use HasFactory;

    protected $fillable = [
        'fullname',
        'email',
        'mobilephone',
        'date_of_birth',
        'address'
    ];
}
