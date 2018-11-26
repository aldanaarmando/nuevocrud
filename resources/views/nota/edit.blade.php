@extends('layouts.layout')

@section('title', 'Nuevo docente')

@section('content')
<h1 class="text-center">Ingreasar nota</h1>

<form action="" method="POST">
@csrf
    @method('PUT')
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id" value="{{$student->id}">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Nombre</label>
  <div class="col-10">
    <input class="form-control" type="text" name="name" >
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

  <div>
  <button type="submit" class="btn btn-primary">Editar</button>
</div>
    </form>
@endsection