<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class FrontDeskController extends Controller
{

    public function index() {
        $occupiedRooms = Room::where("room_status_id", 2)->count();

        return view('frontdesk/dashboard', [
            "occupiedRooms" => $occupiedRooms
        ]);
    }
}
