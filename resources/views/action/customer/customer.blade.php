@extends('layouts.app')

@section('title', 'Get Customer')

@section('content')

<header class="main-header" data-aos="fade-out">
    <h1><span class="text-success">Customer</span></h1>
    <p>A customer is an individual or business that purchases another company's goods or services.</p>
    <small class="text-success"></small>
</header>

<main class="container">
    <div class="mb-4 text-center">
        <a href="customer/create" class="btn btn-success">Create</a>
        <a href="/" class="btn btn-success">Home</a>
    </div>
    @foreach ($customer as $cs)
    <section class="card" data-aos="flip-up">
        <div>
        <h3 class="text-success">Nomor ID Customer : {{$cs->id}}</h3>
            <p style="text-align:justify;">Nama Customer : {{$cs->namaCustomer}}</p>
            <p style="text-align:justify;">Alamat Customer : {{$cs->alamatCustomer}}</p>
            <p style="text-align:justify;">Nomor Telepon : {{$cs->noTelp}}</p>
            <a href="{{route('customer.update', $cs->id)}}" class="btn btn-success">Update</a>
            <form action="{{route('customer.delete')}}" method="post">
                @csrf
                <input type="hidden" value="{{$cs->id}}" name="id">
                <button class="btn btn-success my-3">Delete</button>
            </form>
        </div>
    </section>
    @endforeach
</main>



@endsection