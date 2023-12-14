<div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>Pengguna</th>
                <th>Ruangan</th>
                <th>Biro</th>
                <th>Agenda</th>
                <th>Waktu Pesan</th>
                <th>Waktu Kembalikan</th>
                <th>Sudah Kembalikan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $item)
                <tr class="{{ $item->actual_return_time == null ? '' : ($item->return_time < $item->actual_return_time ? 
                    'bg-danger' : 'bg-success') }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->room->room_name }}</td>
                    <td>{{ $item->user->biro }}</td>
                    <td>{{ $item->user->agenda }}</td>
                    <td>{{ $item->booking_time }}</td>
                    <td>{{ $item->return_time }}</td>
                    <td>{{ $item->actual_return_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>