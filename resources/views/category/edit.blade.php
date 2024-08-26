@extends('layouts.app')

@section('titel', 'Edit category')

@section('content')


    <form action="{{ route('category.update', $edit->id) }}" method="post">
        @csrf
        @method('PUT')
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Lengkap</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="" name="category_name" placeholder="category_name" value="{{ $edit->category_name }}" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
