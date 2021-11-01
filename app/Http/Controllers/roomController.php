<?php

namespace App\Http\Controllers;

use App\Room;
use Illuminate\Http\Request;

class roomController extends Controller
{
    public function showMovie()
    {
        $room = Room::all();
        return view('admin/room/all', ['room' => $room]);
    }
}
