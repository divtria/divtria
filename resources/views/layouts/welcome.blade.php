@extends('layouts.app')

@section('title', 'Welcome')

@section('content')
    <h1>Halo, Selamat Datang!</h1>
    {{-- Nama dipanggil murni dari variabel controller --}}
    <h2>Saya {{ $nama }}</h2>
    <p>Profesi: {{ $role }}</p>
@endsection