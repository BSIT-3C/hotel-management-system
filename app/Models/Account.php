<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    protected $fillable = [
        "employee_id",
        
        "password",
        "is_verified"
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

   
}
