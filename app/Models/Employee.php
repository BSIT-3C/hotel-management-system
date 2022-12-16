<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Employee extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "employees";

    protected $fillable = [

        'first_name',
        'last_name',
        "position_id",
        "address",
        'work_start',
        'work_end',
        'gender',
        'birthday',
        'email',
        'photo',
        'contact_number',
        'deleted_at',
    ];

    public function getName()
    {
        return "{$this->first_name} {$this->last_name}";
    }

    // relationships
    public function account()
    {
        return $this->hasMany(Account::class, 'employee_id');
    }
    public function reservations()
    {
        return $this->hasMany(Reservation::class, 'employee_id');
    }

    public function payroll()
    {
        return $this->hasMany(Employee_Payroll::class, 'employee_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id');
    }
    public function roles()
    {
        return $this->hasMany(EmployeeRole::class, 'employee_id');
    }

    public function hasAnyRoles($roles)
    {
        return $this->roles->whereIn('role_id', $roles)->first();
    }

    public function hasAnyRole($role)
    {
        // $all_roles = Role::where('role', $role)->first();
        return $this->roles->whereIn('role_id', $role)->first();
    }
}
