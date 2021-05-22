@extends('layouts.app_0310')

@section('title', 'Home')

@section('content')
    <div class="jumbotron">
        <h1 class="display-4">Halo Semua</h1>
        <p class="lead">Nama Saya Sheila Indri Rukamana Putri!</p>
        <hr class="my-4">
        <p>Saat ini saya kuliah di Universitas 17 Agustus 1945 jurusan Teknik Informatika dan masih semester 4, Silahkan hubungi saya bila anda ingin menanyakan sesuatu.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{ route('contact') }}" role="button">Hubungi Saya</a>
        </p>
    </div>
@endsection
