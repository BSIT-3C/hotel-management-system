<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee_Payroll extends Model
{
    use HasFactory;
    protected $table = 'employee_payrolls';

    protected $fillable = [
        "employee_id",
        "position_id",
        "cut_off"
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
}