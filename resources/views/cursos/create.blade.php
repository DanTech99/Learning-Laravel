

@extends('layouts.template')

@section('title', 'crear')

@section('content')

<h1>formulario de creacion de cursos</h1>
<a href="{{route('cursos.index')}}">volver a cursos</a>
<form action="{{route('cursos.store')}}" method="POST">

    @csrf
    <label >
        nombre:
        <br>
        <input type="text" name="name" value="{{old('name')}}">
    </label><br>
    @error('name')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>

    @enderror

    <label >
        slug:
        <br>
        <input type="text" name="slug" value="{{old('slug')}}">
    </label><br>
    @error('name')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>

    @enderror


    <label >
        descripcion:
        <br>
       <textarea name="descripcion" rows="5">{{old('descripcion')}}</textarea>
    </label><br>

    @error('descripcion')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>
    @enderror

    <label>
        categoria:
        <br>
        <input type="text" name="categoria" value="{{old('categoria')}}">
    </label>
    @error('categoria')
        <br>
        <small style="color: red;">*{{$message}}</small>
        <br>
    @enderror
    <br>
    <button type="submit">enviar</button>
</form>
@endsection
