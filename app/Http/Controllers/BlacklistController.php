<?php

namespace App\Http\Controllers;

use App\Models\Blacklist;


class BlacklistController extends Controller
{
    
    public function index(){
        return view('/guest-information/blacklist', [
            "blacklists" => Blacklist::all()
        ]);
    }

    public function form(){
        return view('/guest-information/blacklist_form');
    }

    public function update_form(Blacklist $blacklist){
        return view('/guest-information/blacklist_form_update', [
            "blacklist" => $blacklist
        ]);
    }

    public function store(){
        $form = request()->validate([
            "guest_id" => ['required', 'integer'],
            "reason" => ["required"]
        ]);
       

        $form['guest_id'] = (int) request('guest_id');

        Blacklist::create($form);

        return back();
    }

    public function delete(Blacklist $blacklist) {
        Blacklist::destroy($blacklist->id);

        return back();
    }

    public function update(Blacklist $blacklist) {
        $form = request()->validate([
            "guest_id" => ['required', 'integer'],
            "reason" => ["required"]
        ]);

        Blacklist::where("id", $blacklist->id)->update($form);

        return back();
    }

}
