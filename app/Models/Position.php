<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        "position",
        "department_id"
    ];

    public function department()
    {
        return $this->belongsTo(Department::class, 'department_id');
    }

    public function payroll(){
        return $this->hasMany(Payroll::class, 'position_id');
    }
}
