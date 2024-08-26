@extends('layouts.app')

@section('titel', 'Tambah Category')

@section('content')


    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama category</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="" name="category_name" placeholder="category_name" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
