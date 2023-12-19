@extends('layouts.mainlayout')

@section('title', 'Banned User')
@section('user', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">List Banned User</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        <a href="/users" class="btn btn-primary"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
                    <br>
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
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
                                @foreach ($bannedUsers as $item)
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
                                            <a href="/user-restore/{{ $item->slug }}" class="btn btn-warning"><i
                                                class="fa fa-trash-restore" onclick="return confirm('Yakin Ingin Dikembalikan?')"> Kembalikan</i></a>
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
