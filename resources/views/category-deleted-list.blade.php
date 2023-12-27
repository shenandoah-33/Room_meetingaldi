@extends('layouts.mainlayout')

@section('title', 'Deleted Category')

@section('content')

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Kategori Yang Di Hapus</h2>
                <div class="mt-5 d-flex justify-content-end">
                    <a href="/categories" class="btn btn-primary me-3">Kembali</a>
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
                                Kategori yang dihapus
                            </h5>
                        </div>
                        <div class="tabel-responsive" style="overflow-x: auto;">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deletedCategories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="category-restore/{{$item->slug}}" class="btn btn-secondary">Pulihkan</a>
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
