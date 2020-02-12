<!-- Nombre Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre', 'Nombre:') !!}
    {!! Form::text('nombre', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apellido', 'Apellido:') !!}
    {!! Form::text('apellido', null, ['class' => 'form-control']) !!}
</div>

<!-- Curp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('curp', 'Curp:') !!}
    {!! Form::text('curp', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!-- Universidad Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('universidad_id', 'Universidad Id:') !!}
    {!! Form::text('universidad_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_usuario_id', 'Tipo Usuario Id:') !!}
    {!! Form::text('tipo_usuario_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Municipio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_id', 'Municipio Id:') !!}
    {!! Form::text('municipio_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Giro Negocio Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro_negocio_id', 'Giro Negocio Id:') !!}
    {!! Form::text('giro_negocio_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('evento_id', 'Evento Id:') !!}
    {!! Form::text('evento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tPersonas.index') }}" class="btn btn-default">Cancelar</a>
</div>
