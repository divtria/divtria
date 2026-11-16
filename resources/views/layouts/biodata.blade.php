@extends('layouts.app')

@section('title', 'Data Diri')

@section('content')
    <h1>Data Diri</h1>
    <p><strong>Nama Lengkap:</strong> {{ $nama }}</p>

    {{-- Penerapan Kondisi If-Else --}}
    <p><strong>Status Saat Ini:</strong>
        @if($statusAktif)
            <span style="color: green;">Open for Freelance / Collaboration</span>
        @else
            <span style="color: red;">Sedang Sibuk</span>
        @endif
    </p>

    <h3>Daftar Hobi (Menggunakan While Loop):</h3>
    <ul>
        @php $i = 0; @endphp
        @while($i < count($hobi))
            <li>{{ $hobi[$i] }}</li>
            @php $i++; @endphp
        @endwhile
    </ul>
@endsection