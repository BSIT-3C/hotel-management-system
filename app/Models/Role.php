<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $fillable = [
        "role"
    ];

    public function accounts(){
        return $this->hasMany(Account::class, 'role_id');
    }
}
