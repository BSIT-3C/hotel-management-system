<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expenses extends Model
{
    use HasFactory;

    protected $dates = [
        "date",
    ];
    protected $fillable = [
        "type",
        "name",
        "unit_price",
        "date",
    ];
}
