            <div class="card border-0">
                <div class="card-header">
                    <h5 class="card-title">
                        Pemesanan Ruang
                    </h5>
                </div>
                <div class="tabel-responsive" style="overflow-x: auto;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Pengguna</th>
                                <th scope="col">Ruangan</th>
                                <th scope="col">Biro</th>
                                <th scope="col">Agenda</th>
                                <th scope="col">Waktu Pesan</th>
                                <th scope="col">Waktu Kembalikan</th>
                                <th scope="col">Sudah Kembalikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($booking as $item)
                                <tr class="{{ $item->actual_return_time == null ? '' : ($item->return_time < $item->actual_return_time ?
                                    'bg-danger' : 'bg-success') }}">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->username ?? 'None'}}</td>
                                    <td>{{ $item->room->room_name }}</td>
                                    <td>{{ $item->user->biro ?? 'None'}}</td>
                                    <td>{{ $item->user->agenda ?? 'None'}}</td>
                                    <td>{{ $item->booking_time }}</td>
                                    <td>{{ $item->return_time }}</td>
                                    <td>{{ $item->actual_return_time }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

