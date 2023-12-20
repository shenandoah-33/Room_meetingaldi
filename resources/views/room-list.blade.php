@extends('layouts.mainlayout')

@section('title', 'Room List')

@section('content')
    <main class="content px-3 py-2">
        <div class="container-fluid">
            <form action="" method="get">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="input-group mb-3">
                            <input type="text" name="title" class="form-control" placeholder="Cari Ruangan">
                            <button class="btn btn-primary" type="submit">Cari</button>
                        </div>
                    </div>
                </div>
            </form>

            <div class="my-5">
                <div class="row">
                    @foreach ($rooms as $item)
                        <div class="col-lg-3 col-md-4 col-sm-6 mb-3">
                            <div class="card h-100">
                                <img src="{{ $item->cover != null ? asset('storage/cover/'.$item->cover) : asset('assets/img/notfile.png') }}" class="card-img-top" draggable="false">
                                <div class="card-body">
                                <h5 class="card-title">{{ $item->room_name }}</h5>
                                <p class="card-text">{{ $item->capacity }}</p>
                                <p class="card-text text-end fw-bold {{ $item->status == 'ready' ? 'text-success' : 'text-danger'}}">
                                    {{ $item->status }}
                                </p>

                                @if($item->status == 'return')
                                    {{-- Ganti status menjadi "ready" jika ruangan sudah dikembalikan --}}
                                    <?php $item->status = 'ready'; ?>
                                @endif

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </main>
@endsection
