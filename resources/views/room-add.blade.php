@extends('layouts.mainlayout')

@section('title', ' Add Room')

@section('content')

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <main class="content px-3 py-2">
        <div class="container-fluid">
            <div class="mb-3">
                <h2>Tambahkan Ruangan</h2>
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
                            <label for="room_name" class="form-label">Nama Ruangan</label>
                            <input type="text" name="room_name" id="room_name" class="form-control" placeholder="Nama Ruangan" value="{{ old('room_name')}}">
                        </div>

                        <div class="mb-3">
                            <label for="capacity" class="form-label">Kapasitas</label>
                            <input type="text" name="capacity" id="capacity" class="form-control" placeholder="Kapasitas" value="{{ old('capacity')}}">
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar</label>
                            <input type="file" name="image" class="form-control">
                        </div>

                        <div class="mb-3">
                            <label for="category" class="form-label">Kategori</label>
                            <select name="categories[]" id="category" class="form-control select-multiple" multiple>
                                @foreach ($categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="mt-3">
                            <button class="btn btn-success me-3" type="submit">Simpan</button>
                            <a href="/rooms" class="btn btn-danger">Batal</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select-multiple').select2();
    });
    </script>

@endsection
