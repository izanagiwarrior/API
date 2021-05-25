@extends('layouts.app')

@section('title', 'Komplain')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #fd7e14;'>Komplain</span></h1>
    <p>Komplain adalah sesuatu yang diungkapkan yang keluar karena perasaan kesusahan. Perasaan kesusahan yang dimaksud dalam pengertian tersebut merupakan perasaan ketidakpuasan yang dipicu atas pembelian terhadap suatu barang atau jasa.</p>
    <small style='color: #fd7e14;'></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="komplain/create" class="btn" style='background-color: #fd7e14;'>Tambah</a>
        <a href="/" class="btn btn-dark">Home</a>
    </div>
    @foreach ($komplain as $km)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 style='color: #fd7e14;'>Nomor ID Komplain : {{$km->id}}</h3>
            <p style="text-align:justify;">Jenis Komplain : {{$km->jenisKomplain}}</p>
            <p style="text-align:justify;">Tanggal Komplain : {{$km->tanggalKomplain}}</p>
            <form action="{{route('komplain.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$km->id}}" name="id">
                <a href="{{route('komplain.update', $km->id)}}" class="btn" style='background-color: #fd7e14;'>Membarui</a>
                <button class="btn" style='background-color: #fd7e14;'>Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection