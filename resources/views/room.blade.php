@extends('layouts.mainlayout')

@section('title', 'Room')
    
@section('content')
    <h1>Room</h1>

    <div class="my-4 d-flex justify-content-end">
        <a href="room-add" class="btn btn-primary me-3">Add Data</a>
        <a href="room-deleted" class="btn btn-secondary">View Deleted Data</a>
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
                    <th>Room Name</th>
                    <th>Capacity</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
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
                            <a href="/room-delete/{{$item->slug}}" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection