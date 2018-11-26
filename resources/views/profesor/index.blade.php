@extends('layouts.layout')

@section('content')

<h1 class="text-center">PROFESOR</h1>
<div class="container">
    <a class="btn btn-info mb-4" style="background-color:red" href="{{route('profesor.create')}}">Insertar profesor</a>
   
    <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">CI</th>
      <th scope="col">Nombre</th>
      <th scope="col">Apellido</th>
      <th scope="col">Fecha de nacimiento</th>                                            
        <th scope="col">Direccion</th>
        <th scope="col">Telefono</th>
       
        <th scope="col">E-mail</th>
        <th scope="col">Contraseña</th>  
        <th scope="col">Modificar</th>
        <th scope="col">Borrar</th> 
    </tr>
  </thead>
  <tbody>
      @foreach($teachers as $persona)
    <tr>
    @if($persona->type=="profesor")
      <th scope="row">{{$persona->id}}</th>
      <td>{{ $persona->name}}</td>
      <td>{{ $persona->last_name}}</td>
    <td>{{ $persona->birthdate}}</td>
      <td>{{ $persona->adress}}</td>
      <td>{{ $persona->phone}}</td> 
         
      <td>{{ $persona->email}}</td>
        <td>{{ $persona->password}}</td>
        <td><a class="btn btn-info" href="{{route('profesor.edit',$persona->id)}}">Editar</a></td>
             <form action="{{route('persona.destroy',$persona->id)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" >Eliminar</button></td>
        @endif 
        </form>
    </tr>
@endforeach
  </tbody>
</table>
</div>

@endsection