@extends('layouts.app')
@section('title', 'category User')

@section('content')
    <div class="table-responsive">
        <div class="mb-3" align="right">
            <a href="{{ route('category.create') }}" class="btn btn-primary">Tambah</a>
        </div>
        <table class="table table-bordered text-center">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori Produk</th>
                        <th>aksi</th>
                    </tr>
                </thead>

                <tbody>
                    @php $no=1; @endphp
                    @foreach ($category as $category)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $category->category_name }}</td>
                            <td>
                                <a href="{{ route('category.edit', $category->id) }}" class="btn btn-success btn-xs">Edit</a>
                                {{-- <a href="{{ route('category.destroy',$category->id) }}" class="btn btn-danger btn-xs">Delete</a> --}}
                                <form class="d-inline" action="{{ route('category.destroy', $category->id) }}" method="post">
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
