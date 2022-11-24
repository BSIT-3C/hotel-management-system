<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payroll extends Model
{
    use HasFactory;

    protected $fillable = [
        "position_id",
        "gross_amount",
        "total_deduction",
    ];

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }

    public function getTotalSalary()
    {
        return ($this->attributes['gross_amount'] - $this->attributes['total_deduction']);
    }
}
