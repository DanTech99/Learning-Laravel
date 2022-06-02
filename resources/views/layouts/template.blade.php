<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <link href="{{ asset('css/cursos.css') }}" rel="stylesheet">
    <style>
        .active{
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    {{-- header --}}
   @include('layouts.partials.header')

    {{-- contenido --}}
    @yield('content')

    {{-- pie de pagina --}}
    @include('layouts.partials.footer')

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
     
</body>
</html>