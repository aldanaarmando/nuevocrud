@extends('layouts.layout')

@section('title', 'Nuevo docente')

@section('content')
<h1 class="text-center">Editar persona</h1>

<form action="{{route('persona.update',$persona->id)}}" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id" value="{{$persona->id}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="name" value="{{$persona->name}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido</label>
  <div class="col-10">
    <input class="form-control" type="text" name="last_name" value="{{$persona->last_name}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="birthdate" value="{{$persona->birthdate}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Direccion</label>
  <div class="col-10">
    <input class="form-control" type="text" name="adress" value="{{$persona->adress}}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="search" name="phone" value="{{$persona->phone}}">
  </div>
</div>
    
<div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="hidden" name="type" value="alumno">
  </div>
</div>
    
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="email" value="{{$persona->email}}">
  </div>
</div>

<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password"  name="password" value="{{$persona->password}}">
  </div>
</div>

  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection