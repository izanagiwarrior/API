@extends('layouts.app')

@section('title', 'Get Employees')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Employees</span></h1>
    <p>An employee is an individual who was hired by an employer to do a specific job. The employee is hired by the employer after an application and interview process results in his or her selection as an employee.</p>
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