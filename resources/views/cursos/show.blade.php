
@extends('layouts.template')

@section('title', 'curso ' . $curso->name)

@section('content')
<h1>Bienvenido al curso {{$curso->name}}</h1>
<a href="{{route('cursos.index')}}">volver</a>
<a href="{{route('cursos.edit', $curso)}}">editar curso</a>
<p><strong>Categoria</strong> {{$curso->categoria}}</p>
<p>{{$curso->descripcion}}</p>

<form action="{{route('cursos.destroy', $curso)}}" method="POST">
    @csrf
    @method('delete')
    <button type="submit">eliminar</button>
</form>
@endsection