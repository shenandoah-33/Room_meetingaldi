@extends('layouts.mainlayout')

@section('title', 'Booking')
    
@section('content')
    <h1>Pemesanan</h1>

    <div class="mt-5">
        <x-booking-table :booking='$booking' />
    </div>
@endsection