<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "contact",
        "work_hours",
        "position_id",
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class, 'employee_id');
    }

    public function position(){
        return $this->belongsTo(Position::class, 'position_id');
    }
}
