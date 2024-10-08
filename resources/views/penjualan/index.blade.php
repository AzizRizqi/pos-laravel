@extends('layouts.app')
@section('title', 'Transaksi Penjualan')

@section('content')

    <form action="{{ route('penjualan.store') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kode Transaksi</label>
                    <input type="text" class="form-control" readonly value="{{ $kode_transaksi ?? '' }}"
                        name="kode_transaksi">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Tanggal Transaksi</label>
                    <input type="text" class="form-control" readonly value="<?php echo date('d/M/Y'); ?>"
                        name="tanggal_transaksi">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Kategori Produk *</label>
                    <select required name="category_id" id="category_id" class="form-control">
                        <option value="">pilih category produk</option>
                        @foreach ($categories as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->category_name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label required for="">Qty produk *</label>
                    <input type="number" class="form-control" value="" name="product_qty" id="product_qty"
                        placeholder="Qty produk">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="mb-3">
                    <label for="">Nama Produk *</label>
                    <select required id="product_id" name="product_id" class="form-control">
                        <option value="">Pilih Produk</option>
                    </select>
                </div>
            </div>
        </div>
        <input type="hidden" name="" id="product_price">
        <input type="hidden" name="" id="product_name">
        <div class="table-transaction mt-5">
            <div class="mb-3" align="right">
                <button type="button" class="btn btn-primary tambah-produk">Tambah Produk</button>
            </div>
            <table class="table table-bordered">
                <div class="table_transaction">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Harga</th>
                            <th>qty</th>
                            <th>Sub total</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                    </tbody>
            </table>

            <div class="row mb-3">
                <div class="col-sm-8">
                    <h3>Total</h3>
                </div>
                <div class="col-sm-4">
                    <h4 class="total_price"></h4>
                    <input type="hidden" name="total_price" id="total_price_val">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-8">
                    <h3>dibayar</h3>
                </div>
                <div class="col-sm-4">
                    <input required type="number" class="form-control" id="dibayar" name="dibayar">
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-sm-8">
                    <h3>kembali</h3>
                </div>
                <div class="col-sm-4">
                    <h3 class="kembalian_text"></h3>
                    <input type="hidden" readonly id="kembalian" name="kembalian" class="form-control">
                </div>
            </div>
            <div class="mt-4" align="right">
                <button type="submit" class="btn btn-success">Buat Pesanan</button>
            </div>
        </div>
    </form>
@endsection
