<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    // Specify the exact table name
    protected $table = 'student';

    protected $fillable = [
        'name', 'id' ,'age', 'address', 'contactNumber'
    ];

}
