@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')

<h2>Selamat Datang {{Auth::user()->username}}, di Pemesanan Ruang Rapat KPU</h2>

<link rel="icon" href="img/logo-kpu.png" type="image/x-icon">

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-door-open"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Ruangan</div>
                        <div class="card-count">{{$room_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-list-ol"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Kategori</div>
                        <div class="card-count">{{$category_count}}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-people"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Pengguna</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h2>Daftar Pemesanan</h2>
        <x-booking-table :booking='$booking' />
    </div>
@endsection
