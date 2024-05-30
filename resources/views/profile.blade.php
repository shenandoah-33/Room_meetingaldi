@extends('layouts.mainlayout')

@section('title', 'Profile')

@section('content')

<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="card mb-3 shadow-sm border-0">
            <div class="row g-0">
                <div class="mb-3">
                    <label for="image" class="form-label">Gambar</label>
                    <input type="file" name="image" class="form-control">
                    <img src="{{ Storage::url('images/profile.jpg') }}" alt="Profile Image">

                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title">{{Auth::user()->username}}</h3>
                        <p class="card-text"><i class="bi bi-telephone-fill me-2"></i><strong>Phone Number : {{ Auth::user()->phone }}</strong> </p>
                        <p class="card-text"><i class="bi bi-geo-alt-fill me-2"></i><strong>Address : {{ Auth::user()->alamat }}</strong></p>
                        <p class="card-text"><small class="text-muted">Member since</small></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="mb-3">
            <h4>Selamat Datang {{Auth::user()->username}}, di Pemesanan Ruang Rapat KPU</h4>
            <x-booking-table :booking='$booking' />
        </div>
    </div>
</main>

@endsection
