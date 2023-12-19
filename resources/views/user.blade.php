@extends('layouts.mainlayout')

@section('title', 'User')
@section('user', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">List User Active</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        <a href="/registered-users" class="btn btn-primary mx-1"><i class="fa fa-users"> Pendaftar Baru</i></a>
                        <a href="/user-banned" class="btn btn-info"><i class="fa fa-search"> Lihat Banned Users</i></a>
                    </div>
                    <br>
                    @if (session('success'))
                        <script>
                            Swal.fire({
                                icon: 'success',
                                text: '{{ session('success') }}'
                            })
                        </script>
                    @endif
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Username</th>
                                    <th>Phone</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->username }}</td>
                                        <td>
                                            @if ($item->phone)
                                                {{ $item->phone }}
                                            @else
                                                -
                                            @endif
                                        </td>
                                        <td>
                                            <a href="/user-detail/{{ $item->slug }}" class="btn btn-secondary"><i
                                                    class="fa fa-search-plus"> Detail</i></a>
                                            <a href="/user-ban/{{ $item->slug }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Banned?')"><i class="fa fa-times">
                                                    Banned Users</i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
