@extends('layouts.app')

@section('title', 'Transaksi')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-danger">Transaksi</span></h1>
    <p>Transaksi adalah suatu kegiatan yang dilakukan oleh pihak organisasi maupun individu yang mampu melahirkan perubahan atas harta atau finansial yang dimilikinya.</p>
    <small class="text-danger"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="transaksi/create" class="btn btn-danger">Tambah</a>
        <a href="/" class="btn btn-dark">Home</a>
    </div>
    @foreach ($transaksi as $ts)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-danger">Nomor ID Transaksi : {{$ts->id}}</h3>
            <h5 class="text-danger">Nomor ID Customer : {{$ts->id_customer}}</h5>
            <h5 class="text-danger">Nomor ID Pengiriman : {{$ts->id_pengiriman}}</h5>
            <h5 class="text-danger">Nomor ID Barang : {{$ts->id_barang}}</h5>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <p style="text-align:justify;">{{$ts->tanggalTransaksi}}</p>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <form action="{{route('transaksi.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$ts->id}}" name="id">
                <a href="{{route('transaksi.update', $ts->id)}}" class="btn btn-danger">Membarui</a>
                <button class="btn btn-danger">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection