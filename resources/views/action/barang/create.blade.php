@extends('layouts.app')

@section('title', 'Add Consumen')

@section('content')

<header class="main-header">
    <h1><span style='color: #6610f2;'>Tambah Barang</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #6610f2;'>Barang apa yang anda ingin masukkan ? </h3>
    <form action="{{ route('barang.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">nama barang</label>
            <input type="text" name="namaBarang" class="form-control">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">berat barang</label>
            <input type="text" name="beratBarang" class="form-control">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">ukuran barang</label>
            <input type="text" name="ukuranBarang" class="form-control">
        </div>

        <div class="form-group">
            <button type="submit" value="submit" class="btn btn-dark">Submit</button>
        </div>
    </form>
</main>



@endsection