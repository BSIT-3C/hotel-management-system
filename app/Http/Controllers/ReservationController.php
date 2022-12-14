<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Guest;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Symfony\Component\Console\Input\Input;

class ReservationController extends Controller
{
    protected function form()
    {

        return view('guest-information.guest_information_form');
    }

    protected function reservation(Request $request)
    {

        $complete_address = explode(',', $request->complete_address);
        $address = implode(", ", array_slice($complete_address, 0, -1));
        $country = trim(last($complete_address));


        return view('guest-information.reservation_form', ["address" => $address, "country" => $country, "data" => $request->all()]);
    }

    protected function store(Request $request)
    {

        // todo: chnage variable to dynamic
        $employee_id = 1;

        // dd($request->all());
        $email = $request->email;

        $guest = Guest::where('email', $email)->first();

        if (!$guest) {
            $guest = Guest::create(['name' => $request->name, 'address' => $request->address . ', ' . $request->country, 'email' => $request->email, 'contact' => $request->phone]);
        }

        $check_in = date('Y-m-d H:i:s', strtotime("$request->check_in_date $request->check_in_time"));
        $check_out = date('Y-m-d H:i:s', strtotime("$request->check_out_date $request->check_out_time"));

        $rooms_with_type = DB::table('rooms')
            ->join('room_types', 'rooms.room_type_id', '=', 'room_types.id')
            ->where('room_types.room_type', '=', $request->room_type)
            ->select('rooms.id')->get();

        $sql = "SELECT DISTINCT rooms.id AS room_id, room_types.room_type FROM `rooms` LEFT JOIN reservations ON rooms.id = reservations.room_id INNER JOIN room_types ON rooms.room_type_id = room_types.id WHERE rooms.id NOT IN ( SELECT reservations.room_id as available_rooms_id FROM reservations WHERE (check_in <= '$check_in' AND check_out >= '$check_in') OR (check_in < '$check_out' AND check_out >= '$check_out' ) OR ('$check_in' <= check_in AND '$check_out' >= check_in) ) AND room_type = '$request->room_type' ORDER BY rooms.id";


        $available_rooms = DB::select($sql);

        if (!$available_rooms) {

            return back()->withErrors((['rooms' => 'NO AVAILABLE ROOMS!']));
        }

        $availed_rooms = null;

        if (count($available_rooms) >= $request->rooms_count) {

            for ($i = 0; $i < $request->rooms_count; $i++) {

                $availed_rooms[] = $available_rooms[$i];
            }
        } else {
            for ($i = 0; $i < count($available_rooms); $i++) {

                $availed_rooms[] = $available_rooms[$i];
            }
        }

        // dd($availed_rooms);

        if ($availed_rooms) {
            foreach ($availed_rooms as $room) {
                Reservation::create(['room_id' => $room->room_id, 'guest_id' => $guest->id, 'employee_id' => $employee_id, 'check_in' => $check_in, 'check_out' => $check_out]);
            }
        }

        return redirect()->route('result')->with(['availed_rooms' => $availed_rooms, 'entered_room_count' => $request->rooms_count]);
        // dd($check_in);
        // dd($available_rooms);
    }

    protected function result()
    {
        $availed_rooms = session()->get('availed_rooms') ?? null;
        $erc = session()->get('entered_room_count') ?? 0;

        return view('guest-information.reservation_result', ['availed_rooms' => $availed_rooms, 'entered_room_count' => $erc]);
    }

    protected function list()
    {
        return view('guest-information.reservation_list');
    }
}
