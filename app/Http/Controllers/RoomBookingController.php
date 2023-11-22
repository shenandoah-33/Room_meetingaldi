<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Room;
use App\Models\User;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class RoomBookingController extends Controller
{
    public function index()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $rooms = Room::all();
        return view('room-booking', ['users' => $users, 'rooms' => $rooms]);   
    }

    function store(Request $request)
    {
        $request['booking_time'] = Carbon::now()->toTimeString();
        $request['return_time'] = Carbon::now()->addHours(3)->toTimeString();

        $room = Room::findOrFail($request->room_id)->only('status');

        if($room['status'] != 'ready'){
            Session::flash('message', 'Cannot booking, The Room is Full');
            Session::flash('alert-class', 'alert-danger');
            return redirect('room-booking');
        }
        else{
            try {
                DB::beginTransaction();
                //process insert to booking table
                Booking::create($request->all());
                //process update room table
                $room = Room::findOrFail($request->room_id);
                $room->status = 'full';
                $room->save();
                DB::commit();

                Session::flash('message', 'Booking Room Success');
                Session::flash('alert-class', 'alert-success');
                return redirect('room-booking');
            } catch (\Throwable $th) {
                DB::rollBack();
            }
        }

    }
}
