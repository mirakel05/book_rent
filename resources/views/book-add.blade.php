@extends('layouts.mainlayout')

@section('title', 'Tambah Buku')
@section('buku', 'active')

@section('content')
    <div class="container-fluid">
        <h2 class="text-uppercase">Tambahkan Buku Baru</h2>
        <div class="mb-3 mt-5 w-50">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="book-add" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="code" class="col-sm-2 col-form-label">Kode :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="book_code" id="code" placeholder="Kode ..."
                            value="{{ old('book_code') }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Judul :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Judul Buku ..." value="{{ old('title') }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Foto :</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="category" class="col-sm-2 col-form-label">Kategori :</label>
                    <div class="col-sm-10">
                        <select name="categories[]" id="category" class="form-control select-multiple" multiple>
                            @foreach ($categories as $item)
                                <option value="{{ $item->id }}">- {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"> Save</i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
