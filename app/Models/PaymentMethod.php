<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    use HasFactory;

    protected $fillable = [
        "payment_method",
        "is_available"
    ];

    public function transactions(){
        return $this->hasMany(Transaction::class, 'payment_method_id');
    }
}
