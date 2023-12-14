@extends('layouts.mainlayout')

@section('title', 'Profile')
    
@section('content')
    <h1>Selamat Datang, {{Auth::user()->username}}</h1>

    <div class="mt-5">
        <h1>Daftar Pemesanan</h1>
        <x-booking-table :booking='$booking' />
    </div>
@endsection