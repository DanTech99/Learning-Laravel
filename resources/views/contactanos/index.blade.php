@extends('layouts.template')

@section('title', 'contactanos')

@section('content')
<h1>dejanos tu mensaje</h1>

<form action="{{route('contactanos.store')}}" method="POST">

    @csrf
    <label>
        nombre:
        <input type="text" name="name">
    </label>
    <br>

    <label>
        correo:
        <input type="text" name="correo">
    </label>
    <br>

    <label >
    <textarea name="mensaje"  rows="10"></textarea>
    </label>
    <br>

    <button type="submit">enviar mensaje</button>
</form>

@if (session('info'))
    <script>
        alert("{{session('info')}}")
        // swal({
        //     icon: "success",
        //     text: "{{session('info')}}",
        // });
    </script>
@endif
@endsection
