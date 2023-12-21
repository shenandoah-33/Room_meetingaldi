@extends('layouts.mainlayout')

@section('title', 'Delete Category')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <h2>Yakin ingin hapus Kategori {{$category->name}} ?</h2>
        <div class="mt-5">
            <a href="/category-destroy/{{$category->slug}}" class="btn btn-danger me-5">Sure</a>
            <a href="/categories" class="btn btn-info">Cancel</a>
        </div>
    </div>
</main>
@endsection
