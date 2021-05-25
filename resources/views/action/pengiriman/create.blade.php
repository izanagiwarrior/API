@extends('layouts.app')

@section('title', 'Tambah Pengiriman')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-primary">Tambah Pengiriman</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-primary">Pengiriman apa yang anda ingin masukkan ?</h3>
    <form action="{{ route('pengiriman.create')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Kurir</label>
            <input type="text" name="namaKurir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Pengiriman</label>
            <input type="date" name="tanggalPengiriman" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Ekspedisi</label>
            <input type="text" name="namaEkspedisi" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn btn-primary">Tambah</button>
            <a href="{{route('pengiriman')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection