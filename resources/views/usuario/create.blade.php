@extends('usuario.master')
@section('content')
  <div class="row">
    <div class="col-lg-12">
      <div class="float-left">
        <h3>Registrar Persona</h3>
        <br/>
        <br/>
      </div>
    </div>
  </div>

  @if(count($errors) > 0 )
    <div class="alert alert-danger">
      <strong>Error al registrar los datos de la persona.</strong>
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif

  <!--POST = REGISTRAR-->
  {{ Form::open(['method'=>'POST', 'route'=>'usuario.store']) }}
  @include('usuario.form')
  {{ Form::close() }}

@endsection
