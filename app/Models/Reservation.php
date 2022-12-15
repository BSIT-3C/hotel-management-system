<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_id",
        "guest_id",
        "employee_id",
        "check_in",
        "check_out"
    ];
    protected $dates = [
        "check_in",
        "check_out"
    ];

    public function room()
    {
        return $this->belongsTo(Room::class, 'room_id');
    }

    public function guest()
    {
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }
}
