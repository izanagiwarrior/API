@extends('layouts.app')

@section('title', 'Pengiriman')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-primary">Pengiriman</span></h1>
    <p>Pengiriman adalah kegiatan mendistribusikan produk barang dan jasa produsen kepada konsumen</p>
    <small class="text-primary"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="pengiriman/create" class="btn btn-primary">Tambah</a>
        <a href="/" class="btn btn-dark">Home</a>
    </div>
    @foreach ($pengiriman as $pg)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-primary">Nomor ID Pengiriman : {{$pg->id}}</h3>
            <h3 class="text-primary">Nomor ID Transaksi : {{$pg->id_transaksi}}</h3>
            <p style="text-align:justify;">Nama Kurir : {{$pg->namaKurir}}</p>
            <p style="text-align:justify;">Tanggal Pengiriman : {{$pg->tanggalPengiriman}}</p>
            <p style="text-align:justify;">Nama Ekspedisi : {{$pg->namaEkspedisi}}</p>
            <form action="{{route('pengiriman.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$pg->id}}" name="id">
                <a href="{{route('pengiriman.update', $pg->id)}}" class="btn btn-primary">Membarui</a>
                <button class="btn btn-primary">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection