@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')

    <div class="content px-3 py-2">
        <div class="mb-3">
            <h2>Selamat Datang {{Auth::user()->username}}, di Pemesanan Ruang Rapat KPU</h2>
            <x-booking-table :booking='$booking' />
        </div>
    </div>
@endsection
