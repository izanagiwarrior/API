@extends('layouts.app')

@section('title', 'Update Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Update Pengiriman</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>update pengiriman anda</h3>
    <form action="{{ route('pengiriman.process', $pengiriman->id) }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Kurir</label>
            <input type="text" name="namaKurir" value="{{$pengiriman->namaKurir}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pengiriman</label>
            <input type="date" name="tanggalPengiriman" value="{{$pengiriman->tanggalPengiriman}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Ekspedisi</label>
            <input type="text" name="namaEkspedisi" value="{{$pengiriman->namaEkspedisi}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection