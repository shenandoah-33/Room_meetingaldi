@extends('layouts.mainlayout')

@section('title', 'Delete Room')
    
@section('content')
    <h2>Are You Sure to Delete Room {{$room->room_name}} ?</h2>
    <div class="mt-5">
        <a href="/room-destroy/{{$room->slug}}" class="btn btn-danger me-5">Sure</a>
        <a href="/rooms" class="btn btn-info">Cancel</a>
    </div>
@endsection
