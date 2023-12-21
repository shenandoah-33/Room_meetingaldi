@extends('layouts.mainlayout')

@section('title', 'Detail Users')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Detail Pengguna</h2>
                <div class="mt-2 d-flex justify-content-end">
                    @if ($user->status == 'inactive')
                        <a href="/user-approve/{{$user->slug}}" class="btn btn-info me-3">Approved User</a>
                    @endif
                    <a href="/users" class="btn btn-secondary">Back</a>
                </div>

                <div class="mt-5">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                @endif
                    </div>
                </div>

                <div class="my-5 w-25">
                <div class="mb-3">
                    <label for="" class="form-label">Username</label>
                        <input type="text" class="form-control" readonly value="{{$user->username}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">No. Telp</label>
                        <input type="text" class="form-control" readonly value="{{$user->phone}}">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Biro</label>
                        <textarea name="" id="" cols="30" rows="2" class="form-control" style="resize: none">{{ $user->biro }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Agenda</label>
                        <textarea name="" id="" cols="30" rows="7" class="form-control" style="resize: none">{{ $user->agenda }}</textarea>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">Status</label>
                        <input type="text" class="form-control" readonly value="{{$user->status}}">
                </div>
                </div>

                <div class="mt-5">
                    <h2>Riwayat Booking</h2>
                    <x-booking-table :booking='$booking' />
                </div>
            </div>
        </div>
    </main>

@endsection
