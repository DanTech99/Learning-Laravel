

@extends('layouts.template')

@section('title', 'cursos edit')

@section('content')

<h1>formulario para editar cursos</h1>
<a href="{{route('cursos.index')}}">volver a cursos</a>
<form action="{{route('cursos.update', $curso)}}" method="POST">
    {{-- directivas --}}
    @csrf
    @method('put')

    <label >
        nombre:
        <br>
        <input type="text" name="name" value="{{old('name', $curso->name)}}">
    </label>
    @error('name')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>
    @enderror
    <br>

    <label >
        descripcion:
        <br>
       <textarea name="descripcion" rows="5" >{{old('descripcion', $curso->descripcion)}}</textarea>
    </label>
    @error('descripcion')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>
    @enderror
    <br>
    <label>
        categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria', $curso->categoria)}}">
    </label>
    @error('categoria')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">Actualizar</button>
</form>
@endsection
