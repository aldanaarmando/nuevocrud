@extends('layouts.layout')

@section('content')

<h1 class="text-center">NOTAS DE ESTUDIANTES</h1>
<div class="container">
    <a class="btn btn-info mb-4"

       href="{{route('persona.create')}}">Insertar persona</a>

    <table class="table">
  <thead class="thead-dark">
    <tr>
    
      <th scope="col">Nro.</th>
      <th scope="col">CI</th>
      <th scope="col">Codigo de Materia</th>
      <th scope="col">Nota</th>                                             
        <th scope="col">Modificar</th>
        <th scope="col">Borrar</th> 
    </tr>
  </thead>
<tbody>
      @foreach($notes as $nota)
    <tr>
 
      <th scope="row">{{$nota->id}}</th>
      <td>{{ $nota->id_student}}</td>
      <td>{{ $nota->id_matter}}</td>
        <td>{{ $nota->note}}</td>
        
    </tr>
@endforeach
  </tbody>
        
</table>
</div>

@endsection
