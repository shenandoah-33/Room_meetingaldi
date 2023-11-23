<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        $booking = Booking::with(['user', 'room',])->get();
        return view('booking', ['booking' => $booking]);
    }
}
