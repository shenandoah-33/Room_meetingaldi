@extends('layouts.mainlayout')

@section('title', 'Deleted Room')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Ruangan Yang Di Hapus</h2>
                <div class="mt-5 d-flex justify-content-end">
                    <a href="/rooms" class="btn btn-primary me-3">Back</a>
                </div>

                    <div class="mt-5">
                            @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                        @endif
                            </div>
                    </div>
                    <div class="card border-0">
                        <div class="card-header">
                            <h5 class="card-title">
                                Ruangan yang telah dihapus
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
                                    @foreach ($deletedRooms as $item)
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
                                                <a href="/room-restore/{{$item->slug}}" class="btn btn-secondary">Pulihkan</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
