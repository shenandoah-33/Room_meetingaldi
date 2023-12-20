@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')


<link rel="icon" href="img/logo-kpu.png" type="image/x-icon">

<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h2>Selamat Datang {{Auth::user()->username}}, di Pemesanan Ruang Rapat KPU</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill text-dark illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Welcome Back, Admin</h4>
                                    <p class="mb-0">Admin Dashboard, Komisi Pemilihan Umum</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="img/logo-kpu.png" class="img-fluid illustration-img"
                                    alt="gambar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill bg-light text-dark border">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="card-count">{{$room_count}}</div>
                                <p class="mb-2">Ruangan
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill bg-light text-dark border">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="card-count">{{$category_count}}</div>
                                <p class="mb-2">kategori
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill bg-light text-dark border">
                    <div class="card-body py-4">
                        <div class="d-flex align-items-start">
                            <div class="flex-grow-1">
                                <div class="card-count">{{$user_count}}</div>
                                <p class="mb-2">Pengguna
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="content px-3 py-2">
        <h2>Daftar Pemesanan</h2>
        <x-booking-table :booking='$booking' />
    </div>
</main>




@endsection
