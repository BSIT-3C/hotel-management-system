<?php

namespace App\Http\Controllers;

use App\Models\Lost_And_Found_Item;
use App\Models\Room;
use App\Models\User;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;

class HousekeepingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    //Manage Room Status
    public function manage_rooms()
    {
        $rooms = Room::all();

        return view('/housekeeping/manage'); 
    }

    //View Rooms
    public function show_rooms()
    {
        $rooms = Room::all();

        return view('/housekeeping/viewall', [
            'view_rooms' => $rooms
        ]); 
    }

    //Lost and Found
    public function show_lostandfound()
    {
        $lfitems = Lost_And_Found_Item::all();

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems
        ]); 
    }

    public function create_lostandfound(Request $request)
    {
        $item = new Lost_And_Found_Item();
        $item -> item_name = $request -> input('item_name');
        $item -> item_quantity = $request -> input('item_quantity');
        $item -> room_no_found_at = $request -> input('room_number');
        $item -> item_status = $request -> input('item_status');
        $item -> date_and_time = $request -> input('date_and_time');
        $item -> save();

        $lfitems = Lost_And_Found_Item::all();

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems , 'message' => 'The Item Was Successfully Added!'
        ]);
    }

    public function update_lostandfound($id)
    {
        $lfitems = Lost_And_Found_Item::find($id);

        return view('/housekeeping/lostandfound_update', [
            'items' => $lfitems
        ]); 
    }

    public function process_update_lostandfound(Request $request, $id)
    {
        $lfitems = Lost_And_Found_Item::find($id);

        $lfitems-> item_status = $request -> input('item_status');

        $lfitems -> save();

        $lfitems = Lost_And_Found_Item::all();

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems , 'message' => 'The Item Status was Successfully Updated!'
        ]);
    }

    //Assign Housekeeper
    public function assign_housekeeper()
    {
        //$rooms = Room::all();

        return view('/housekeeping/assign'); 
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('housekeeping.home');
    }
}
