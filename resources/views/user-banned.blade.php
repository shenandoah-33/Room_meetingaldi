@extends('layouts.mainlayout')

@section('title', 'Banned Users')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Pengguna yang dilarang</h2>
                <div class="d-flex justify-content-end">
                    <a href="/users" class="btn btn-secondary me-3 mt-5">Kembali</a>
                </div>

                <div class="mt-5">
                    @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                @endif
            </div>

            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Daftar Pengguna yang di hentikan
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
                                @foreach ($bannedUsers as $item)
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
                                        <a href="/user-restore/{{$item->slug}}" class="btn btn-info">Pulihkan</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
        </div>
    </main>
            @endsection
