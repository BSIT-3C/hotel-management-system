<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blacklist extends Model
{
    use HasFactory;

    protected $fillable = [
        "guest_id",
        "reason",
    ];

    public function guest(){
        return $this->belongsTo(Guest::class, 'guest_id');
    }
}
