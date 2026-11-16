@extends('layouts.app')

@section('title', 'Gallery')

@section('content')
    <h1>Galeri Foto</h1>

    {{-- Jenis Looping 1: Foreach --}}
    <h3>Koleksi Foto (Foreach Loop):</h3>
    <div style="display: flex; gap: 20px;">
        @foreach($photos as $item)
            <div style="border: 1px solid #ccc; padding: 10px; width: 200px;">
                <h4>{{ $item['judul'] }}</h4>
                <p>Kategori: {{ $item['kategori'] }}</p>
            </div>
        @endforeach
    </div>

    {{-- Jenis Looping 2: For Loop untuk Rating/Bintang --}}
    <h3>Rating Galeri (For Loop):</h3>
    <p>
        @for($bintang = 1; $bintang <= 5; $bintang++)
            ⭐
        @endfor
    </p>
@endsection