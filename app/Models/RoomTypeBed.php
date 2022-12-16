<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomTypeBed extends Model
{
    use HasFactory;

    public function room_type(){
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }

    public function rooms(){
        return $this->hasMany(Room::class, 'room_type_beds_id');
    }
}
