@extends('layouts.app')

@section('title', 'Product List')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Product</span></h1>
    <p>a product is an object or system made available for consumer use; it is anything that can be offered to a market to satisfy the desire or need of a customer. In retailing, products are often referred to as merchandise, and in manufacturing, products are bought as raw materials and then sold as finished goods. A service is also regarded to as a type of product.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="transaksi/create" class="btn btn-success">Create</a>
        <a href="/" class="btn btn-success">Home</a>
    </div>
    @foreach ($transaksi as $ts)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 class="text-success">Nomor ID Pengiriman : {{$ts->id_pengiriman}}</h3>
            <h3 class="text-success">Nomor ID Barang : {{$ts->id_barang}}</h3>
            <h3 class="text-success">Nomor ID Transaksi : {{$ts->id}}</h3>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <p style="text-align:justify;">{{$ts->tanggalTransaksi}}</p>
            <p style="text-align:justify;">{{$ts->jenisPembelian}}</p>
            <a href="{{route('transaksi.update', $ts->id_customer)}}" class="btn btn-success">Update</a>
            <form action="{{route('transaksi.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$ts->id}}" name="id">
                <button class="btn btn-success my-3">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection