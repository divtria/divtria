<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Portofolio - @yield('title')</title>
</head>
<body style="font-family: sans-serif; margin: 0;">

    {{-- Memanggil Header --}}
    @include('layouts.header')

    <main style="padding: 20px; min-height: 70vh;">
        @yield('content')
    </main>

    {{-- Memanggil Footer --}}
    @include('layouts.footer')

</body>
</html>