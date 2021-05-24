@extends('layouts.app')

@section('title', 'Update Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Update Transaksi</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>Seller</h3>
    <form action="{{ route('transaksi.update') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Transaksi</label>
            <input type="date" name="tanggalTransaksi" value="{{transaksi->tanggalTransaksi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Jenis Pembelian</label>
            <input type="text" name="jenisPembelian" value="{{transaksi->jenisPembelian}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection