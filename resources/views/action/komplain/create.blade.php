@extends('layouts.app')

@section('title', 'Tambah Komplain')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #fd7e14;'>Tambah Komplain</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #fd7e14;'>Komplain apa yang anda ingin masukkan ?</h3>
    <form action="{{ route('komplain.create') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Jenis Komplain</label>
            <input type="text" name="jenisKomplain" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Komplain</label>
            <input type="date" name="tanggalKomplain" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn" style='background-color: #fd7e14;'>Tambah</button>
            <a href="{{route('komplain')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection