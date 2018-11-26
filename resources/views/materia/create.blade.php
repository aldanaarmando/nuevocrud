@extends('layouts.layout')

@section('title', 'Nuevo materia')

@section('content')
<h1 class="text-center">Insertar nueva materia</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<form action="" method="POST">
@csrf
    
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">Identificador</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Materia</label>
  <div class="col-10">
    <input class="form-control" type="text" name="modelname">
  </div>
</div>
<div class="form-group row">
  <label for="example-search-input" class="col-2 col-form-label">Aula</label>
  <div class="col-10">
    <input class="form-control" type="text" name="classroom">
  </div>
</div>


  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
    
@endsection