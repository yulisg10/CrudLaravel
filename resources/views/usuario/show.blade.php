@extends('usuario.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="float-left">
        <h3>Datos Personales</h3>
      </div>
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">
      <strong>Nombre : </strong>
    </label>

    <div class="col-sm-10 col-form-label">
      {{ $user->nombre }}
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">
      <strong>Fecha Nacimiento : </strong>
    </label>

    <div class="col-sm-10 col-form-label">
      {{ $user->fecha }}
    </div>
  </div>

  <div class="form-group row">
    <label class="col-sm-2 col-form-label">
      <strong>Edad : </strong>
    </label>

    <div class="col-sm-10 col-form-label">
      {{ $user->edad }}
    </div>
  </div>

  <!--Botones-->
  <div class="float-left">
    <a class="btn btn-xs btn-primary" href="{{ route('usuario.index') }}">Atrás</a>
  </div>

@endsection
