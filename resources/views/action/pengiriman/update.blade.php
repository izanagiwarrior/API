@extends('layouts.app')

@section('title', 'Membarui Pengiriman')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-primary">Membarui Pengiriman</span></h1>
    <small class="text-sucess"></small>
</header>

<main class="container">
    <h3 class="mb-4" class="text-center">Membarui : {{$pengiriman->namaKurir}}</h3>
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

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn btn-primary">Membarui</button>
            <a href="{{route('pengiriman')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection