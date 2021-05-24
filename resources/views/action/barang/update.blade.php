@extends('layouts.app')

@section('title', 'Update Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Update Barang</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>silahkan update barang</h3>
    <form action="{{ route('barang.process', $barang->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">nama barang</label>
            <input type="text" name="namaBarang" value="{{$barang->namaBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">berat barang</label>
            <input type="text" name="beratBarang" value="{{$barang->beratBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">ukuran barang</label>
            <input type="text" name="ukuranBarang" value="{{$barang->ukuranBarang}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection