<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoomType extends Model
{
    use HasFactory;

    protected $fillable = [
        "room_type",
    ];

    public function beds(){
        return $this->hasMany(RoomTypeBed::class, 'room_type_id');
    }
}
