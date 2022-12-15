<?php

namespace App\Http\Controllers;

use App\Models\Lost_And_Found_Item;
use App\Models\Room;
use App\Models\Employee;
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

    public function show_manage()
    {
        $rooms = Room::all();

        return view('/housekeeping/manage', [
            'view_rooms' => $rooms
        ]); 
    }

    //update room status
    public function update_manage($id)
    {
        $rooms = Room::find($id);

        return view('/housekeeping/manage_update', [
            'view_rooms' => $rooms
        ]);
    }

    //Update Manage Room Status ID
    public function process_update_manage(Request $request, $id)
    {
        $rooms = Room::find($id);

        $rooms-> room_status_id = $request -> input('room_status');

        $rooms -> save();

        $rooms = Room::all();

        return view('/housekeeping/manage', [
            'view_rooms' => $rooms , 'message' => 'The Rooms Status ID was Successfully Updated!'
        ]);
    }

    //View Rooms
    public function show_rooms()
    {
        $rooms = Room::all();

        return view('/housekeeping/viewall', [
            'view_rooms' => $rooms
        ]); 
    }

    //View Single Room
    public function view_single_room($id)
    {
        $rooms = Room::find($id);

        return view('/housekeeping/singleroom', [
            'view_rooms' => $rooms
        ]);
    }

    //Lost and Found
    public function show_lostandfound()
    {
        //$lfitems = Lost_And_Found_Item::all();

        $lfitems = Lost_And_Found_Item::get()->where('deleted_at', NULL);

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems
        ]); 
    }

    //create lost and found
    public function create_lostandfound(Request $request)
    {
        $item = new Lost_And_Found_Item();
        $item -> item_name = $request -> input('item_name');
        $item -> item_quantity = $request -> input('item_quantity');
        $item -> room_no_found_at = $request -> input('room_number');
        $item -> item_status = $request -> input('item_status');
        $item -> date_and_time = $request -> input('date_and_time');
        $item -> save();

        $lfitems = Lost_And_Found_Item::get()->where('deleted_at', NULL);

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems , 'message' => 'The Item Was Successfully Added!'
        ]);
    }

    //update lost and found item status
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

        $lfitems = Lost_And_Found_Item::get()->where('deleted_at', NULL);

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems , 'message' => 'The Item Status was Successfully Updated!'
        ]);
    }

    //Soft-Delete Lost and Found Items
    public function process_delete_lostandfound($id)
    {
        $datetime_today = date('Y-m-d H:i:s');

        $lfitems = Lost_And_Found_Item::find($id);
        $lfitems-> deleted_at = $datetime_today;
        $lfitems -> save();

        $lfitems = Lost_And_Found_Item::get()->where('deleted_at', NULL); 

        return view('/housekeeping/lostandfound', [
            'items' => $lfitems , 'message' => 'The Item was Successfully Deleted!'
        ]);
    }

    //Assign Housekeeper
    public function show_assign_housekeeper()
    {
        $employees = Employee::all();

        return view('/housekeeping/assign', [
            'employees' => $employees
        ]);
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
