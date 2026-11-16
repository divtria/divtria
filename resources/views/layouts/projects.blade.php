@extends('layouts.app')

@section('title', 'Projects')

@section('content')
    <h1>Daftar Proyek</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Proyek</th>
            <th>Tahun</th>
            <th>Status</th>
        </tr>
        @foreach($projects as $index => $proj)
        <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $proj['nama'] }}</td>
            <td>{{ $proj['tahun'] }}</td>
            <td>
                @if($proj['status'] == 'Selesai')
                    <strong style="color: green;">✔ Selesai</strong>
                @else
                    <strong style="color: orange;">⏳ Dalam Proses</strong>
                @endif
            </td>
        </tr>
        @endforeach
    </table>
@endsection