@extends('layouts.app')

@section('titel', 'Tambah User')

@section('content')


    <form action="{{ route('user.store') }}" method="post">
        @csrf
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Nama Lengkap</label>
            </div>
            <div class="col-sm-5">
                <input type="text" class="form-control" id="" name="name" placeholder="nama_lengkap" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Email</label>
            </div>
            <div class="col-sm-5">
                <input type="email" class="form-control" id="" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2">
                <label for="" class="form-label">Password</label>
            </div>
            <div class="col-sm-5">
                <input type="password" class="form-control" id="" name="password" placeholder="Password" required>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-10">
                <button class="btn btn-primary" type="submit">Simpan</button>
            </div>
        </div>
    </form>
@endsection
