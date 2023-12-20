@extends('layouts.mainlayout')

@section('title', 'Delete Room')

@section('content')
<main class="content px-3 py-2">
    <div class="container-fluid">
        <div class="mb-3">
            <h2>Yakin ingin hapus ruangan ini? {{$room->room_name}} ?</h2>
            <div class="mt-5">
                <a href="/room-destroy/{{$room->slug}}" class="btn btn-danger me-5">Sure</a>
                <a href="/rooms" class="btn btn-info">Cancel</a>
            </div>
        </div>
    </div>
</main>
@endsection
