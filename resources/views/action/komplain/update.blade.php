@extends('layouts.app')

@section('title', 'Membarui Komplain')

@section('content')

<header class="main-header">
    <h1><span style='color: #fd7e14;'>Membarui Komplain</span></h1>
    <small class="text-danger"></small>
</header>

<main class="container">
    <h3 class="mb-4" style='color: #fd7e14;'>Membarui : {{$komplain->id}}</h3>
    <form action="{{ route('komplain.process', $komplain->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label class="" for="exampleInputEmail1">Jenis Komplain</label>
            <input type="text" name="jenisKomplain" value="{{$komplain->jenisKomplain}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group">
            <label class="" for="exampleInputEmail1">Tanggal Komplain</label>
            <input type="date" name="tanggalKomplain" value="{{$komplain->tanggalKomplain}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <div class="form-group text-center">
            <button type="submit" value="submit" class="btn" style="background-color:#fd7e14;">Membarui</button>
            <a href="{{route('komplain')}}" class="btn btn-dark">Back</a>
        </div>
    </form>
</main>



@endsection