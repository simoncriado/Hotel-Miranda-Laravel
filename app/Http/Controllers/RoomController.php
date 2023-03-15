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
}
