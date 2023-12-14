@extends('layouts.mainlayout')

@section('title', 'Profile')
    
@section('content')
    <h2>Selamat Datang {{Auth::user()->username}}, di Pemesanan Ruang Rapat KPU</h2>

    <div class="mt-5">
        <h2>Daftar Pemesanan</h2>
        <x-booking-table :booking='$booking' />
    </div>
@endsection