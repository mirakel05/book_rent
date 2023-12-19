@extends('layouts.mainlayout')

@section('title', 'Deleted Buku')
@section('buku', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">List Buku</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        <a href="/books" class="btn btn-primary"><i class="fa fa-undo"> Kembali</i></a>
                    </div>
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
                                    <th>Kode</th>
                                    <th>Title</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($deletedBooks as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->book_code }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            <a href="/book-restore/{{ $item->slug }}" class="btn btn-warning"><i
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
