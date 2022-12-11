<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    use HasFactory;


    protected $fillable = [
        "room_type_id",
        "occupied",
        "amount",
        "date",
    ];

    public function room_type()
    {
        return $this->belongsTo(RoomType::class, 'room_type_id');
    }
}
