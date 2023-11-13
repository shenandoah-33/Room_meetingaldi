@extends('layouts.mainlayout')

@section('title', 'Deleted Room')
    
@section('content')
    <h1>
        Deleted Room List
    </h1>

    <div class="mt-5 d-flex justify-content-end">
        <a href="/rooms" class="btn btn-primary me-3">Back</a>
    </div>

        <div class="mt-5">
                @if (session('status'))
                <div class="alert alert-success">
                    {{ session('status') }}
            @endif
        </div>

    <div class="my-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Room Name</th>
                    <th>Capacity</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($deletedRooms as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->room_name }}</td>
                        <td>{{ $item->capacity }}</td>
                        <td>
                            <a href="/room-restore/{{$item->slug}}" class="btn btn-secondary">Restore</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
