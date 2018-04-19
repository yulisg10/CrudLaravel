@extends('usuario.master')

@section('content')
  <div class="row">
    <div class="col-lg-12">
      <h3>Tabla Persona CRUD</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12">
      <div class="float-right">
        <a class="btn btn-xs btn-success" href="{{ route('usuario.create') }}"> Registrar Persona </a>
      </div>
    </div>
  </div>

  <br/>

  @if($message = Session::get('success'))
    <div class="alert alert-success">
      <p> {{ $message }} </p>
    </div>
  @endif

  <table class="table table-bordered">
    <tr>
      <th>N.</th>
      <th>Nombre</th>
      <th>Fecha Nacimiento</th>
      <th>Edad</th>
      <th width="350px">Acciones</th>
    </tr>

    @foreach ($user as $us)
      <tr>
        <td>{{ $i++ }}</td>
        <td>{{ $us->nombre }}</td>
        <td>{{ $us->fecha }}</td>
        <td>{{ $us->edad }}</td>
        <td>
          <a class="btn btn-xs btn-info" href="{{ route('usuario.show', $us->id) }}">Consultar</a>
          <a class="btn btn-xs btn-primary" href="{{ route('usuario.edit', $us->id) }}">Modificar</a>

          {{ Form::open(['method'=>'DELETE', 'route'=>['usuario.destroy', $us->id], 'style'=>'display:inline']) }}
          {{ Form::submit('Eliminar', ['class'=>'btn btn-xs btn-danger']) }}
          {{ Form::close() }}
        </td>
      </tr>
    @endforeach
  </table>
  <!--Se genera la Paginación, debido a que se
  encuentra definida en UsuarioController-->
  {{ $user->links() }}
@endsection
