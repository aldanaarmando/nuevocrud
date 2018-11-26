@extends('layouts.layout')

@section('title', 'Nuevo docente')

@section('content')
<h1 class="text-center">Insertar registro de profesor</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<form action="{{route('persona.store')}} " method="POST">
@csrf
    <div class="container">
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="name">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Apellido</label>
  <div class="col-10">
    <input class="form-control" type="text" name="last_name">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Fecha de nacimiento</label>
  <div class="col-10">
    <input class="form-control" type="text" name="birthdate">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Direccion</label>
  <div class="col-10">
    <input class="form-control" type="text" name="adress">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Telefono</label>
  <div class="col-10">
    <input class="form-control" type="search" name="phone">
  </div>
</div>
    
    <div class="form-group row">
  <div class="col-10">
    <input class="form-control" type="hidden" name="type" value="profesor">
  </div>
</div>    
    
<div class="form-group row">
  <label for="example-email-input" class="col-2 col-form-label">Email</label>
  <div class="col-10">
    <input class="form-control" type="email"  name="email">
  </div>
</div>

<div class="form-group row">
  <label for="example-password-input" class="col-2 col-form-label">Password</label>
  <div class="col-10">
    <input class="form-control" type="password"  name="password">
  </div>
</div>

  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
    </div>
@endsection