@extends('layouts.mainlayout')

@section('title', ' Add Room')

@section('content')

    <h1>Add Room List</h1>

    <div class="mt-5 w-50">

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="room-add" method="post" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="room_name" class="form-label">Room Name</label>
                <input type="text" name="room_name" id="room_name" class="form-control" placeholder="Room Name" value="{{ old('room_name')}}">
            </div>

            <div class="mb-3">
                <label for="capacity" class="form-label">Capacity</label>
                <input type="text" name="capacity" id="capacity" class="form-control" placeholder="Capacity" value="{{ old('capacity')}}">
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" name="image" class="form-control">
            </div>

            <div class="mt-3">
                <button class="btn btn-success me-3" type="submit">Save</button>
                <a href="/rooms" class="btn btn-danger">Cancel</a>
            </div>
        </form>
    </div>

@endsection
