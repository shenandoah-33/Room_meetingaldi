@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')


<link rel="icon" href="img/logo-kpu.png" type="image/x-icon">

<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h2>Admin Dashboard</h2>
        </div>
        <div class="row">
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill text-dark illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Selamat Datang, Admin</h4>
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
                <div class="card flex-fill text-dark illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Jumlah Ruangan</h4>
                                    <p class="h2 text-bold">{{$room_count}}</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="img/Rapatbundar.png" class="img-fluid illustration-img"
                                    alt="gambar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill text-dark illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Kategori Ruangan</h4>
                                    <p class="h4 text-bold">{{$category_count}} Lantai</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="img/Rapatkosong.png" class="img-fluid illustration-img"
                                    alt="gambar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 d-flex">
                <div class="card flex-fill text-dark illustration">
                    <div class="card-body p-0 d-flex flex-fill">
                        <div class="row g-0 w-100">
                            <div class="col-6">
                                <div class="p-3 m-1">
                                    <h4>Jumlah Pengguna</h4>
                                    <p class="h2 text-bold">{{$user_count}}</p>
                                </div>
                            </div>
                            <div class="col-6 align-self-end text-end">
                                <img src="img/pengguna.png" class="img-fluid illustration-img"
                                    alt="gambar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-5">
                <h2>Daftar Pemesanan</h2>
                <x-booking-table :booking='$booking' />
            </div>
        </div>
    </div>
</main>




@endsection
