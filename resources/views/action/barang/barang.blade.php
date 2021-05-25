@extends('layouts.app')

@section('title', 'Barang')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-warning">Barang</span></h1>
    <p>Barang atau komoditas dalam pengertian ekonomi adalah suatu objek fisik yang dapat dilihat dan disimpan atau jasa yang memiliki nilai.</p>
    <small class="text-warning"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="barang/create" class="btn btn-warning">Tambah</a>
        <a href="/" class="btn btn-warning">Home</a>
    </div>
    @foreach ($barang as $bs)
    <section class="card" data-aos="flip-up">
        <div>
        <h3 class="text-warning">Nomor ID Barang : {{$bs->id}}</h3>
            <p style="text-align:justify;">Nama Barang : {{$bs->namaBarang}}</p>
            <p style="text-align:justify;">Berat Barang : {{$bs->beratBarang}} (Kg)</p>
            <p style="text-align:justify;">Ukuran Barang : {{$bs->ukuranBarang}} (M)</p>
            <a href="{{route('barang.update', $bs->id)}}" class="btn btn-warning">Membarui</a>
            <form action="{{route('barang.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$bs->id}}" name="id">
                <button class="btn btn-warning my-3">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection