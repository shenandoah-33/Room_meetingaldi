@extends('layouts.mainlayout')

@section('title', 'Dashboard')

@section('page-name', 'dashboard')

@section('content')

<<<<<<< HEAD
    <h1>Selamat Datang, {{Auth::user()->username}}</h1>
=======
    <h1>Welcome To Booking Room Meeting KPU, {{Auth::user()->username}}</h1>

    <link rel="icon" href="img/logo-kpu.png" type="image/x-icon">
>>>>>>> ddea8be46fccbcee73272e62e37e86f92c957cac

    <div class="row mt-5">
        <div class="col-lg-4">
            <div class="card-data">
                <div class="row">
                    <div class="col-6"><i class="bi bi-door-open"></i></div>
                    <div class="col-6 d-flex flex-column justify-content-center align-items-end">
                        <div class="card-desc">Rooms</div>
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
                        <div class="card-desc">Categories</div>
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
                        <div class="card-desc">Users</div>
                        <div class="card-count">{{$user_count}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="mt-5">
        <h1>Daftar Pemesanan</h1>
        <x-booking-table :booking='$booking' />
    </div>
@endsection
