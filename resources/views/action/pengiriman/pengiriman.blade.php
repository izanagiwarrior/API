@extends('layouts.app')

@section('title', 'Get Pengiriman')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Pengiriman</span></h1>
    <p>a product is an object or system made available for consumer use; it is anything that can be offered to a market to satisfy the desire or need of a customer. In retailing, products are often referred to as merchandise, and in manufacturing, products are bought as raw materials and then sold as finished goods. A service is also regarded to as a type of product.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="product/create" class="btn btn-success">Create</a>
        <a href="/" class="btn btn-success">Home</a>
    </div>
    @foreach ($pengiriman as $pg)
    <section class="card" data-aos="flip-up">
        <div>
        <h3 class="text-success">Nomor ID Pengiriman : {{$pg->id}}</h3>
        <h3 class="text-success">Nomor ID Transaksi : {{$pg->id_transaksi}}</h3>
            <p style="text-align:justify;">Nama Kurir : {{$pg->namaKurir}}</p>
            <p style="text-align:justify;">Tanggal Pengiriman : {{$pg->tanggalPengiriman}} (Kg)</p>
            <p style="text-align:justify;">Nama Ekspedisi : {{$pg->namaEkspedisi}} (M)</p>
            <a href="{{route('pegawai.update', $pg->id)}}" class="btn btn-success">Update</a>
            <form action="{{route('pegawai.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$pg->id}}" name="id">
                <button class="btn btn-success my-3">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection