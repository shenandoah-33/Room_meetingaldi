@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3 align-items-center justify-content-center text-center">
            <h2>Yakin ingin hapus Kategori {{$category->name}} ?</h2>
                <div class="mt-5">
                    <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger me-5">Hapus</a>
                    <a href="/categories" class="btn btn-info">Batal</a>
            </div>
        </div>
    </div>
</main>
@endsection
