<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_number",
        "room_status_id",
        "room_type_id"
    ];

    public function roomRates(){
        return $this->hasMany(RoomRate::class, 'room_id');
    }

    public function reservations(){
        return $this->hasMany(Reservation::class, 'room_id');
    }

    public function roomStatus(){
        return $this->belongsTo(RoomStatus::class, 'room_status_id');
    }

    public function roomType(){
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

}
