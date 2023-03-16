<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\rooms;

class RoomController extends Controller
{
    public function showIndex()
    {
        return view("index", ["rooms" => json_decode(rooms::all()->random(3))]);
    }
    public function showGrid()
    {
        return view("rooms", ["rooms" => json_decode(rooms::all())]);
    }
    public function showDetails($id)
    {
        return view("room-details", ["room" => json_decode(rooms::findOrFail($id))]);
    }
    public function showOffers()
    {
        return view("offers", ["rooms" => json_decode(rooms::where("discount", "=", "Yes")->orderBy("room_offer")->get())]);
    }
}
