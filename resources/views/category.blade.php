@extends('layouts.mainlayout')

@section('title', 'Kategori')
@section('kategori', 'active')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="card shadow mb-4 col-12">
                <div class="card-header py-3">
                    <h4 class="m-0 font-weight-bold text-primary">List Kategori</h4>
                    <div class="mt-2 d-flex justify-content-start">
                        <a href="category-add" class="btn btn-primary mx-1"><i class="fa fa-plus"> Tambah Data</i></a>
                        <a href="category-deleted" class="btn btn-info"><i class="fa fa-trash"> Lihat Deleted Data</i></a>
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
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categories as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>
                                            <a href="/category-edit/{{ $item->slug }}" class="btn btn-warning"><i class="fa fa-edit"> Edit</i></a>
                                            <a href="/category-delete/{{ $item->slug }}" class="btn btn-danger" onclick="return confirm('Yakin Hapus?')"><i class="fa fa-trash"> Hapus</i></a>
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
