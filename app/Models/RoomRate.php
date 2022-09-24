<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'rate'
    ];
    
    public function rooms(){
        return $this->belongsTo(Room::class, 'room_id');
    }
}
