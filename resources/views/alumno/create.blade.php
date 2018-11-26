@extends('layouts.layout')

@section('title', 'Nuevo docente')

@section('content')
<h1 class="text-center">Insertar registro de alumno</h1>
@if (Session::has('message'))
      <div class="alert alert-info">{{ Session::get('message') }}</div>
 @endif
<head>

</head>

    <form action="{{route('alumno.store')}}" method="POST">
        @csrf
<div class="form-group row">
  <label for="example-text-input" class="col-2 col-form-label"></label>
  <div class="col-10">
    <input class="form-control" type="text"  name="id_student">
  </div>
</div>
          <div>
  <button type="submit" class="btn btn-primary">Enviar</button>
</div>
</form>


@endsection