@extends('layouts.mainlayout')

@section('title', 'Edit Kategori')
@section('kategori', 'active')

@section('content')
    <div class="container-fluid">
        <h2 class="text-uppercase">Edit Kategori</h2>
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

            <form action="/category-edit/{{ $category->slug }}" method="post">
                @csrf
                <div>
                    <label for="name" class="col-sm-2 col-form-label">Name :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="name" id="name"
                            value="{{ $category->name }}" placeholder="Nama Kategori ...">
                    </div>
                </div>
                <div class="mt-3">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-save"> Update</i></button>
                </div>
            </form>
        </div>
    </div>
@endsection
