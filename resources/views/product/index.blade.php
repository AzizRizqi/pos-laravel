@extends('layouts.app')
@section('title', 'Data Product')

@section('content')
    <div class="table-responsive">
        <div class="mb-3" align="right">
            <a href="{{ route('product.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Kategori</th>
                        <th>Nama Product</th>
                        <th>Qty</th>
                        <th>Harga</th>
                        <th>aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no=1; @endphp
                    @foreach ($product as $key => $product)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $product->category->category_name }}</td>
                            <td>{{ $product->product_name   }}</td>
                            <td>{{ $product->product_qty }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>
                                <a href="{{ route('product.edit', $product->id) }}" class="btn btn-success btn-xs">Edit</a>
                                {{-- <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                                <form class="d-inline" action="{{ route('product.destroy', $product->id) }}" method="post">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-xs">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
    </div>
@endsection
