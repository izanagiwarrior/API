@extends('layouts.app')

@section('title', 'Pegawai')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Pegawai</span></h1>
    <p>Pegawai adala orang bekerja dengan menjual jasa seperti tenaga dan pikiran yang berhak memperoleh gaji sesuai perjanjian.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="pegawai/create" class="btn btn-success">Tambah</a>
        <a href="/" class="btn btn-dark">Home</a>
    </div>
    @foreach ($pegawai as $pg)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-success">Nomor ID Pegawai : {{$pg->id}}</h3>
            <p style="text-align:justify;">Nama Pegawai : {{$pg->namaPegawai}}</p>
            <p style="text-align:justify;">Alamat Pegawai : {{$pg->alamatPegawai}}</p>
            <p style="text-align:justify;">Nomor Telepon : {{$pg->noTelp}}</p>
            <p style="text-align:justify;">Divisi : {{$pg->divisi}}</p>
            <p style="text-align:justify;">Gaji : {{$pg->gaji}}</p>
            <form action="{{route('pegawai.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$pg->id}}" name="id">
                <a href="{{route('pegawai.update', $pg->id)}}" class="btn btn-success">Membarui</a>
                <button class="btn btn-success">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection