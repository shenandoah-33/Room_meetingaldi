@extends('layouts.mainlayout')

@section('title', 'Registered Users')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Daftar Pengguna Baru</h2>
                <div class="mt-5 d-flex justify-content-end">
                    <a href="/users" class="btn btn-secondary">Approved User List</a>
                </div>
                <div class="card border-0 mt-5">
                    <div class="card-header">
                        <h5 class="card-title">
                            Pengguna Baru
                        </h5>
                    </div>
                    <div class="tabel-responsive" style="overflow-x: auto;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Username</th>
                                    <th>No. Telp</th>
                                    <th>Biro</th>
                                    <th>Agenda</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($registeredUsers as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->username }}</td>
                                    <td>
                                        @if ($item->phone)
                                            {{ $item->phone }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $item->biro }}</td>
                                    <td>{{ $item->agenda }}</td>
                                    <td>
                                        <a href="/user-detail/{{$item->slug}}" class="btn btn-success">Detail</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
            @endsection
