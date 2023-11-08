<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Category;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Room::all();
        return view('room', ['rooms' => $rooms]);
    }

    public function add()
    {
        return view('room-add');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'room_name' => 'required|unique:rooms|max:255', 
            'capacity' => 'required|max:255'
        ]);

        $newName = '';
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->room_name.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
        }

        $request['cover'] = $newName;
        $room = Room::create($request->all());
        return redirect('rooms')->with('status', 'Room Added Successfully');
    }
}
