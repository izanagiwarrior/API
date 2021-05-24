@extends('layouts.app')

@section('title', 'Get Pegawai')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Pegawai</span></h1>
    <p>a product is an object or system made available for consumer use; it is anything that can be offered to a market to satisfy the desire or need of a customer. In retailing, products are often referred to as merchandise, and in manufacturing, products are bought as raw materials and then sold as finished goods. A service is also regarded to as a type of product.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="pegawai/create" class="btn btn-success">Create</a>
        <a href="/" class="btn btn-success">Home</a>
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