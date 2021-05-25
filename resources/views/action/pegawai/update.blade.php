@extends('layouts.app')

@section('title', 'Membarui Pegawai')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class='text-success'>Membarui Pegawai</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4 text-success">Membarui : {{$pegawai->namaPegawai}}</h3>
    <form action="{{ route('pegawai.process', $pegawai->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Nama Pegawai</label>
            <input type="text" name="namaPegawai" value="{{$pegawai->namaPegawai}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Alamat Pegawai</label>
            <input type="text" name="alamatPegawai" value="{{$pegawai->alamatPegawai}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">No Telpon</label>
            <input type="text" name="noTelp" value="{{$pegawai->noTelp}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Divisi</label>
            <input type="text" name="divisi" value="{{$pegawai->divisi}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Gaji</label>
            <input type="text" name="gaji" value="{{$pegawai->gaji}}"  class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn btn-success">Membarui</button>
            <a href="{{route('pegawai')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection