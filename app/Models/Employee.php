<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employee extends Model
{
    use HasFactory;
    protected $table = "employees";

    protected $fillable = [
        "name",
        "address",
        "contact",
        "work_hours",
        "position_id",
    ];

    public function getName(){
        return "{$this->first_name} {$this->last_name}";
    }

    // relationships
    public function reservations(){
        return $this->hasMany(Reservation::class, 'employee_id');
    }

    public function payroll(){
        return $this->hasMany(Employee_Payroll::class, 'employee_id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id');
    }
}
