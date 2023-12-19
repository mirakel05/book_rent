@extends('layouts.mainlayout')

@section('title', 'Buku')
@section('buku', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">List Buku</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        <a href="/book-add" class="btn btn-primary mx-1"><i class="fa fa-plus"> Tambah Data</i></a>
                        <a href="/book-deleted" class="btn btn-info"><i class="fa fa-trash"> Lihat Deleted Data</i></a>
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
                                    <th>Kode</th>
                                    <th>Judul</th>
                                    <th>Kategori</th>
                                    <th>Cover</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($books as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->book_code }}</td>
                                        <td>{{ $item->title }}</td>
                                        <td>
                                            @foreach ($item->categories as $category)
                                                -{{ $category->name }}<br>
                                            @endforeach
                                        </td>
                                        <td><img src="{{ asset('storage/cover/' . $item->cover) }}" alt=""
                                                width="150px"></td>
                                        <td>{{ $item->status }}</td>
                                        <td>
                                            <a href="/book-edit/{{ $item->slug }}" class="btn btn-warning"><i
                                                    class="fa fa-edit"> Edit</i></a>
                                            <a href="/book-delete/{{ $item->slug }}" class="btn btn-danger"
                                                onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash">
                                                    Hapus</i></a>
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
