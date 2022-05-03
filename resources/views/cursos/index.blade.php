

@extends('layouts.template')

@section('title', 'cursos')

@section('content')
<h1>Bienvenidos a la pagina pagina de cursos</h1>
<a href="{{route('cursos.create')}}"class="-bottom-3">crear curso</a> <br><br>
<div class="section">
    @foreach ($cursos as $curso)
      <div class="container">
         <div class="container-title">
            <p><a href="{{route('cursos.show', $curso->id)}})">{{$curso->name}}</a></p>
         </div>
      </div>
    
    @endforeach
   </div>
 {{$cursos->links()}}
@endsection