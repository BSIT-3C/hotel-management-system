<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Lost_And_Found_Item extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "lost_and_found_items";

    protected $fillable = [

        'item_name',
        'item_quantity',
        "room_no_found_at",
        "item_status",
        "date_and_time",
    ];
}
