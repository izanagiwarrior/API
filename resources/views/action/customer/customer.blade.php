@extends('layouts.app')

@section('title', 'Konsumen')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span style='color: #6610f2;'>Konsumen</span></h1>
    <p>Konsumen adalah setiap orang pemakai barang atau jasa yang tersedia dalam masyarakat, baik bagi kepentingan diri sendiri, keluarga, orang lain, maupun makhluk hidup lain dan tidak untuk diperdagangkan.</p>
    <small style='color: #6610f2;'></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="customer/create" class="btn" style="background-color:#6610f2;">Tambah</a>
        <a href="/" class="btn btn-dark">Home</a>
    </div>
    @foreach ($customer as $cs)
    <section class="card" data-aos="flip-up">
        <div>
            <h3 style='color: #6610f2;'>Nomor ID Konsumen : {{$cs->id}}</h3>
            <p style="text-align:justify;">Nama Konsumen : {{$cs->namaCustomer}}</p>
            <p style="text-align:justify;">Alamat Konsumen : {{$cs->alamatCustomer}}</p>
            <p style="text-align:justify;">Nomor Telepon : {{$cs->noTelp}}</p>
            <form action="{{route('customer.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$cs->id}}" name="id">
                <a href="{{route('customer.update', $cs->id)}}" class="btn" style="background-color:#6610f2;">Membarui</a>
                <button class="btn" style="background-color:#6610f2;">Hapus</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection