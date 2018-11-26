@extends('layouts.layout')

@section('title', 'Nuevo docente')

@section('content')
<h1 class="text-center">Insertar persona</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif

<form action="{{route('nota.store')}} " method="POST">
@csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label">CI</label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id" value="{{$student->id}}">
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


  <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
    </form>
@endsection