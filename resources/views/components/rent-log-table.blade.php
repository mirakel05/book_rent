<div>
    <div class="row">
        <div class="card shadow mb-4 col-12">
            <div class="card-header py-3">
                <h4 class="m-0 font-weight-bold text-primary">Rent Log</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>User</th>
                                <th>Judul Buku</th>
                                <th>Tanggal Peminjaman</th>
                                <th>Tanggal Pengembalian</th>
                                <th>Tanggal Dikembalikan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($rentlog as $item)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $item->user->username }}</td>
                                    <td>{{ $item->book->title }}</td>
                                    <td>{{ $item->rent_date }}</td>
                                    <td>{{ $item->return_date }}</td>
                                    <td
                                        class="{{ $item->actual_return_date == null ? '' : ($item->return_date < $item->actual_return_date ? 'bg-danger' : 'bg-success') }}">
                                        <span class="text-light">{{ $item->actual_return_date }} </span></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
