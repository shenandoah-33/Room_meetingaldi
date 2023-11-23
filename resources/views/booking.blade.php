@extends('layouts.mainlayout')

@section('title', 'Booking')
    
@section('content')
    <h1>Booking</h1>

    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>User</th>
                    <th>Room</th>
                    <th>Booking Time</th>
                    <th>Return Time</th>
                    <th>Actual Return Time</th>
                </tr>
            </thead>
        </table>
    </div>
@endsection