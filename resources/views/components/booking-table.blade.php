<div>
    <table class="table">
        <thead>
            <tr>
                <th>No.</th>
                <th>User</th>
                <th>Room</th>
                <th>Booking Time</th>
                <th>Return Time</th>
                <th>Actual Return Time</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($booking as $item)
                <tr class="{{ $item->actual_return_time == null ? '' : ($item->return_time < $item->actual_return_time ? 
                    'bg-danger' : 'bg-success') }}">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->user->username }}</td>
                    <td>{{ $item->room->room_name }}</td>
                    <td>{{ $item->booking_time }}</td>
                    <td>{{ $item->return_time }}</td>
                    <td>{{ $item->actual_return_time }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>