@extends('layouts.app')

@section('title', 'Tambah Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Tambah Transaksi</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-danger">Transaksi apa yang anda ingin masukkan ?</h3>
    <form action="{{ route('transaksi.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">ID Customer</label>
            <input type="text" name="idCustomer" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">ID Pengiriman</label>
            <input type="text" name="idPengiriman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">ID Barang</label>
            <input type="text" name="idBarang" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Transaksi</label>
            <input type="date" name="tanggalTransaksi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Jenis Pembelian</label>
            <input type="text" name="jenisPembelian" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Tambah</button>
        </div>
    </form>
</main>



@endsection