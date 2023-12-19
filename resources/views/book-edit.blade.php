@extends('layouts.mainlayout')

@section('title', 'Edit Buku')
@section('buku', 'active')

@section('content')
    <div class="container-fluid">
        <h2 class="text-uppercase">Edit Buku</h2>
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

            <form action="/book-edit/{{ $book->slug }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="code" class="col-sm-2 col-form-label">Kode :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="book_code" id="code" placeholder="Kode ..."
                            value="{{ $book->book_code }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="title" class="col-sm-2 col-form-label">Judul :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="title" id="title"
                            placeholder="Judul Buku ..." value="{{ $book->title }}">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="image" class="col-sm-2 col-form-label">Foto :</label>
                    <div class="col-sm-10">
                        <input type="file" class="form-control" name="image">
                    </div>
                </div>
                <div class="mb-3">
                    <label for="currentImage" class="col-sm-4 col-form-label">Foto Sebelumnya :</label>
                    @if ($book->cover != '')
                        <img src="{{ asset('storage/cover/' . $book->cover) }}" alt="" width="150px">
                    @else
                        <img src="{{ asset('images/CoverNotFound.png') }}" alt="" width="150px">
                    @endif
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
                <div class="mb-3">
                    <label for="currentCategory" class="col-sm-4 col-form-label">Kategori Sebelumnya :</label>
                    <ul>
                        @foreach ($book->categories as $category)
                            <li>{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"> Save</i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
