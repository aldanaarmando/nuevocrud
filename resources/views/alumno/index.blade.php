@extends('layouts.layout')

@section('content')

<h1 class="text-center">ALUMNOS</h1>
<div class="container">
    <a class="btn btn-info mb-4" 
       
href="{{route('alumno.create')}}">Insertar alumno</a>
  
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
      @foreach($students as $student)
    <tr>
       @if($student->type=="alumno")
      <th scope="row">{{$student->id}}</th>
      <td>{{ $student->name}}</td>
      <td>{{ $student->last_name}}</td>
    <td>{{ $student->birthdate}}</td>
      <td>{{ $student->adress}}</td>
      <td>{{ $student->phone}}</td> 
        
      <td>{{ $student->email}}</td>
        <td>{{ $student->password}}</td>
        <td><a class="btn btn-info" href="{{route('persona.edit',$student->id)}}">Editar</a></td>
             <form action="{{route('persona.destroy',$student->id)}}" method="post">
          @csrf
         @method('DELETE')
                 <td><button type="submit" class="btn btn-info" style="background-color:red">Eliminar</button></td>
             </form> 
                  <td><a class="btn btn-info" style="background-color:green;"     
                         href="{{route('nota.create',$student->id)}}">Nota</a></td>
        @endif  
@endforeach
  </tbody>
</table>
</div>

@endsection