@extends('layouts.app')

@section('title', 'Membarui Barang')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class='text-warning'>Membarui Barang</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-warning">Membarui : {{$barang->namaBarang}}</h3>
    <form action="{{ route('barang.process', $barang->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama barang</label>
            <input type="text" name="namaBarang" value="{{$barang->namaBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Berat barang</label>
            <input type="text" name="beratBarang" value="{{$barang->beratBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Ukuran barang</label>
            <input type="text" name="ukuranBarang" value="{{$barang->ukuranBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn btn-warning">Membarui</button>
            <a href="{{route('barang')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection