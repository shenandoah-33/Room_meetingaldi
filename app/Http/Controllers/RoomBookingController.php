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
        $request['booking_time'] = Carbon::now()->toDateTimeString();
        $request['return_time'] = Carbon::now()->addHours(3)->toDateTimeString();

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

    public function returnRoom()
    {
        $users = User::where('id', '!=', 1)->where('status', '!=', 'inactive')->get();
        $rooms = Room::all();
        return view('room-return', ['users' => $users, 'rooms' => $rooms]);
    }

    public function saveReturnRoom(Request $request)
    {
        // user & room yang dipilih untuk return benar, maka berhasil return room
        // user & room yang dipilih untuk return salah, maka muncul error notice
        $booking = Booking::where('user_id', $request->user_id)->where('room_id', $request->room_id)
        ->where('actual_return_time', null);
        $bookingData = $booking->first();
        $countData = $booking->count();

        if($countData == 1) {
            // return room (berhasil)
            $bookingData->actual_return_time = Carbon::now()->toDateTimeString();
            $bookingData->save();

            Session::flash('message', 'Room Return Success');
            Session::flash('alert-class', 'alert-success');
            return redirect('room-return');
        }
        else{
            // erorr notice (gagal)
            Session::flash('message', 'Return Erorr!');
            Session::flash('alert-class', 'alert-danger');
            return redirect('room-return');
        }
    }
}