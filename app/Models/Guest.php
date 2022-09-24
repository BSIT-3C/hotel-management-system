<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guest extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "address",
        "email",
        "contact",
    ];

    public function reservations(){
        return $this->hasMany(Reservation::class, 'guest_id');
    }

    public function transactions(){
        return $this->hasMany(Transaction::class, 'guest_id');
    }

    public function blacklist(){
        return $this->hasMany(Blacklist::class, 'guest_id');
    }
}
