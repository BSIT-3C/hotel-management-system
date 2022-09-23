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
}
