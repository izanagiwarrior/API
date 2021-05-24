@extends('layouts.app')

@section('title', 'Get Barang')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Barang</span></h1>
    <p>a product is an object or system made available for consumer use; it is anything that can be offered to a market to satisfy the desire or need of a customer. In retailing, products are often referred to as merchandise, and in manufacturing, products are bought as raw materials and then sold as finished goods. A service is also regarded to as a type of product.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="barang/create" class="btn btn-success">Create</a>
        <a href="/" class="btn btn-success">Home</a>
    </div>
    @foreach ($barang as $bs)
    <section class="card" data-aos="flip-up">
        <div>
        <h3 class="text-success">Nomor ID Barang : {{$bs->id}}</h3>
            <p style="text-align:justify;">Nama Barang : {{$bs->namaBarang}}</p>
            <p style="text-align:justify;">Berat Barang : {{$bs->beratBarang}} (Kg)</p>
            <p style="text-align:justify;">Ukuran Barang : {{$bs->ukuranBarang}} (M)</p>
            <a href="{{route('barang.update', $bs->id)}}" class="btn btn-success">Update</a>
            <form action="{{route('barang.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$bs->id}}" name="id">
                <button class="btn btn-success my-3">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection