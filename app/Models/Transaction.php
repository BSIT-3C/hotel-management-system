<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $fillable = [
        "reservation_id",
        "guest_id",
        "payment_method_id",
    ];

    public function reservation(){
        return $this->belongsTo(Reservation::class, 'reservation_id');
    }

    public function guest(){
        return $this->belongsTo(Guest::class, 'guest_id');
    }

    public function paymentMethod(){
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }
}
