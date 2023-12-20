@extends('layouts.mainlayout')

@section('title', 'Room')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Ruangan</h2>
                <div class="my-4 d-flex justify-content-end">
                    <a href="room-add" class="btn btn-primary me-3">Add Room</a>
                    <a href="room-deleted" class="btn btn-secondary">View Deleted Data</a>
                </div>

                        <div class="mt-5">
                            @if (session('status'))
                                <div class="alert alert-success">
                                    {{ session('status') }}
                                </div>
                            @endif
                    </div>
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Jenis-jenis Ruangan
                            </h5>
                        </div>
                        <div class="tabel-responsive" style="overflow-x: auto;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Ruangan</th>
                                    <th>Kapasitas</th>
                                    <th>Kategori</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rooms as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->room_name }}</td>
                                        <td>{{ $item->capacity }}</td>
                                        <td>
                                            @foreach ($item->categories as $category)
                                                {{ $category->name }}
                                            @endforeach
                                        </td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="/room-edit/{{$item->slug}}" class="btn btn-primary">Edit</a>
                                            <a href="/room-delete/{{$item->slug}}" class="btn btn-danger">Hapus</a>
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
