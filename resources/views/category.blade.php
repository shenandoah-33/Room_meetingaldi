@extends('layouts.mainlayout')

@section('title', 'Category')

@section('content')
    <h1>List Kategori</h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="category-add" class="btn btn-primary me-3">Add Category</a>
        <a href="category-deleted" class="btn btn-secondary">View Deleted Data</a>
    </div>

        <div class="mt-5">
            @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
                </div>
            @endif
        </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Kategori</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>
                            <a href="category-edit/{{$item->slug}}" class="btn btn-info">Edit</a>
                            <a href="category-delete/{{$item->slug}}" class="btn btn-danger">Hapus</a>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
@endsection
