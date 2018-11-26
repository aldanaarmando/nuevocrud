@extends('layouts.layout')

@section('content')

<h1 class="text-center">LISTA DE MATERIAS</h1>
<div class="container">
    <a class="btn btn-info mb-4"

       href="{{route('materia.create')}}">Nueva Materia</a>

    <table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Identificador</th>
      <th scope="col">Nombre de la materia</th>
      <th scope="col">Aula</th>                                          
     
    </tr>
  </thead>
 <tbody>
      @foreach($matters as $materia)
    <tr>
    
      <th scope="row">{{$materia->id}}</th>
      <td>{{ $materia->modelname}}</td>
      <td>{{ $materia->classroom}}</td>

    </tr>
@endforeach
     
  </tbody>
        
</table>
</div>

@endsection
