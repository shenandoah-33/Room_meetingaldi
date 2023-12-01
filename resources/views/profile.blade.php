@extends('layouts.mainlayout')

@section('title', 'Profile')
    
@section('content')
    <h1>Welcome, {{Auth::user()->username}}</h1>

    <div class="mt-5">
        <h1>Your Booking</h1>
        <x-booking-table :booking='$booking' />
    </div>
@endsection