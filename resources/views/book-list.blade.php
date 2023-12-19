@extends('layouts.mainlayout')

@section('title', 'List Buku')
@section('listbuku', 'active')

@section('content')
    <div class="container-fluid">
        <form action="" method="get">
            <div class="row mb-4">
                <div class="col-12 col-sm-6">
                    <select name="category" id="category" class="form-control">
                        <option value="" class="text-center">---Pilih Kategori---</option>
                        @foreach ($categories as $item)
                            <option value="{{ $item->id }}">-{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="input-group mb-3">
                        <input type="text" name="title" class="form-control" placeholder="Cari Judul Buku">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </div>
                </div>
            </div>
        </form>
        <div class="row">
            @foreach ($books as $item)
                <div class="col-lg-3 col-md-4 col-ms-6 mb-4">
                    <div class="card h-100">
                        <img src="{{ $item->cover != null ? asset('storage/cover/' . $item->cover) : asset('images/CoverNotFound.png') }}"class="card-img-top"
                            style="width: 18rem;" draggable="false">
                        <div class="card-body">
                            <h5 class="card-title">{{ $item->title }}</h5>
                            <p class="card-text">{{ $item->book_code }}</p>
                            <p class="card-text {{ $item->status == 'in stock' ? 'text-success' : 'text-danger' }}">
                                {{ $item->status }}
                            </p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
