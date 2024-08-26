@extends('layouts.app')

@section('titel', 'Tambah Produk')

@section('content')


    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Kategori</label>
            </div>
            <div class="col-sm-5">
                <select type="text" class="form-control" id="" name="category_id" placeholder="category_id"
                    required>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Product</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="" name="product_name" placeholder="product_name">

                </input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Qty</label>
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="" name="product_qty" placeholder="product_qty">
                </input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Harga</label>
            </div>
            <div class="col-sm-5">
                <input type="number" class="form-control" id="" name="product_price" placeholder="product_price">
                </input>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
