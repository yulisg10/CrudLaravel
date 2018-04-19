
  <div class="form-group row">
    <label class="col-sm-2 col-form-label">
      <strong>Nombre : </strong>
    </label>

    <div class="col-sm-10">
      {{ Form::text('nombre', null, ['placeholder'=>'Nombre', 'class'=>'form-control']) }}
    </div>
  </div>

  <div class="form-group row">
      <label class="col-sm-2 col-form-label">
        <strong>Fecha Nacimiento : </strong>
      </label>

      <div class="col-sm-10">
        {{ Form::date('fecha', null, ['placeholder'=>'Fecha Nacimiento', 'class'=>'form-control']) }}
      </div>
  </div>

  <div class="form-group row">
      <label class="col-sm-2 col-form-label">
        <strong>Edad : </strong>
      </label>

      <div class="col-sm-10">
        {{ Form::text('edad', null, ['placeholder'=>'Edad', 'class'=>'form-control']) }}
      </div>
  </div>

  <!--Botones-->
  <div class="float-right">
    <a class="btn btn-xs btn-primary" href="{{ route('usuario.index') }}">Atrás</a>
    <button type="submit" class="btn btn-xs btn-success" name="button">Guardar Datos</button>
  </div>
