@extends('layouts.app')

@section('title', 'Tambah Barang')

@section('content')

<header class="main-header">
    <h1><span class="text-warning">Tambah Barang</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-warning">Barang apa yang anda ingin masukkan ?</h3>
    <form action="{{ route('barang.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama barang</label>
            <input type="text" name="namaBarang" class="form-control">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Berat barang</label>
            <input type="text" name="beratBarang" class="form-control">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Ukuran barang</label>
            <input type="text" name="ukuranBarang" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Tambah</button>
        </div>
    </form>
</main>



@endsection