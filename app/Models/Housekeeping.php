<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Housekeeping extends Model
{
    use HasFactory;

    protected $fillable = [
        "housekeeper_id",
        "room_id",
        "start_time",
        "end_time",
        "new_room_status",
    ];
}
