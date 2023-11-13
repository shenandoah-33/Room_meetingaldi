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
        $categories = Category::all();
        return view('room-add', ['categories' => $categories]);
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
        $room->categories()->sync($request->categories);
        return redirect('rooms')->with('status', 'Room Added Successfully');
    }

    public function edit($slug)
    {
        $room = Room::where('slug', $slug)->first();
        $categories = Category::all();

        return view('room-edit', ['categories' => $categories, 'room' => $room]);
    }

    public function update(Request $request, $slug)
    {
        if($request->file('image')) {
            $extension = $request->file('image')->getClientOriginalExtension();
            $newName = $request->title.'-'.now()->timestamp.'.'.$extension;
            $request->file('image')->storeAs('cover', $newName);
            $request['cover'] = $newName;
        }

        $room = Room::where('slug', $slug)->first();
        $room->update($request->all());
        
        if($request->categories) {
            $room->categories()->sync($request->categories);
        }

        return redirect('rooms')->with('status', 'Edit Room Success');
    }

    public function delete($slug)
    {
        $room = Room::where('slug', $slug)->first();
        return view('room-delete', ['room' => $room]);
    }

    public function destroy($slug)
    {
        $room = Room::where('slug', $slug)->first();
        $room->delete();
        return redirect('rooms')->with('status', 'Delete Room Success');
    }

    public function deletedRoom()
    {
        $deletedRooms = Room::onlyTrashed()->get();
        return view('room-deleted-list', ['deletedRooms' => $deletedRooms]);
    }

    public function restore($slug)
    {
        $room = Room::withTrashed()->where('slug', $slug)->first();
        $room->restore();
        return redirect('rooms')->with('status', 'Restore Room Success');
    }

}
