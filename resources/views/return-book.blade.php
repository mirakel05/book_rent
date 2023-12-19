@extends('layouts.mainlayout')

@section('title', 'Pengembalian Buku')
@section('returnbook', 'active')

@section('content')
    <div class="container-fluid">
        <div class="card-header">
            <h2 class="text-uppercase text-center">Form Pengembalian Buku</h2>
            @if (session('message'))
                <div class="alert {{ session('alert-class') }}">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <form action="book-return" method="post">
            @csrf
            <div class="row">
                <div class="mb-4 col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
                    <label for="user" class="col-form-label">User :</label>
                    <div class="">
                        <select name="user_id" id="user" class="form-control select-multiple"
                            aria-label="Default select example">
                            @foreach ($users as $item)
                                <option value="{{ $item->id }}">-{{ $item->username }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
                    <label for="book" class="col-form-label">Book :</label>
                    <div class="">
                        <select name="book_id" id="book" class="form-control select-multiple"
                            aria-label="Default select example">
                            @foreach ($books as $item)
                                <option value="{{ $item->id }}">-{{ $item->book_code }}  {{ $item->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="mb-4 col-12 col-md-8 offset-md-2 col-lg-6 offset-md-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"> Submit</i></button>
                </div>
            </div>
        </form>
    </div>
@endsection
