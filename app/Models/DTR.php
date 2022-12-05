<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DTR extends Model
{
    use HasFactory;

    protected $table = "dtr_logs";
    protected $fillable = [
        "employee_id",
        "date",
        "check_in",
        "check_out"
    ];


    public function employee()
    {
        return $this->belongsTo(Employee::class, 'employee_id');
    }

    public function getTotalTime()
    {
        if (!$this->check_out) {
            return 0;
        }

        $check_out = Carbon::parse($this->check_out);
        $check_in = Carbon::parse($this->check_in);
        $diff = $check_in->diff($check_out);

        return $diff;
    }

    public function getHours()
    {
        if (!$this->check_out) {
            return 0;
        }

        $check_out = Carbon::parse($this->check_out);
        $check_in = Carbon::parse($this->check_in);
        $diff = $check_in->diff($check_out);
        $hours = $diff->h;

        return $hours;
    }
    public function getMinutes()
    {
        if (!$this->check_out) {
            return 0;
        }

        $check_out = Carbon::parse($this->check_out);
        $check_in = Carbon::parse($this->check_in);
        $diff = $check_in->diff($check_out);
        $minutes = $diff->i;

        return $minutes;
    }
}
