<!-- Nombre Field -->
<div class="form-group col-sm-4">
    {!! Form::label('name', 'Nombre:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Apellido Field -->
<div class="form-group col-sm-4">
    {!! Form::label('apellido_paterno', 'Apellido paterno:') !!}
    {!! Form::text('apellido_paterno', null, ['class' => 'form-control']) !!}
</div>
<!-- Apellido Field -->
<div class="form-group col-sm-4">
    {!! Form::label('apellido_materno', 'Apellido materno:') !!}
    {!! Form::text('apellido_materno', null, ['class' => 'form-control']) !!}
</div>

<!-- Curp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_idea', 'Nombre de la idea:') !!}
    {!! Form::text('nombre_idea', null, ['class' => 'form-control']) !!}
</div>

<!-- Rfc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rfc', 'Rfc:') !!}
    {!! Form::text('rfc', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('giro_negocio_id', 'Ocupacion:') !!}
    {!! Form::select('giro_negocio_id', $ocupacion, null, ['class' => 'form-control','disabled']) !!}
</div>
<!-- Tipo Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado_id', 'Estado:') !!}
    {!! Form::select('estado_id', $estados, null, ['class' => 'form-control','disabled']) !!}
</div>
<!-- Tipo Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_id', 'Municipio:') !!}
    {!! Form::select('municipio_id', $municipios, null, ['class' => 'form-control','disabled']) !!}
</div>
<!-- Tipo Evento Id Field -->

<!-- Apellido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('municipio_id', 'Region:') !!}
    {!! Form::text('municipio_id', $tPersona->Municipio->Region->descripcion, ['class' => 'form-control', 'disabled']) !!}
</div>

<div class="form-group col-sm-6">
    {!! Form::label('sexo', 'Sexo:') !!}
    {!! Form::select('sexo', array(1=>'Hombre',2=>'Mujer'), null, ['class' => 'form-control','disabled']) !!}
</div>
<div class="form-group col-sm-6">
    {!! Form::label('tipo_usuario_id', 'Tipo de usuario:') !!}
    {!! Form::select('tipo_usuario_id', $tipos, null, ['class' => 'form-control','disabled']) !!}
</div>




<!-- Submit Field -->
<div class="form-group col-sm-12">
    
    <a href="{{ route('tPersonas.index') }}" class="btn btn-default">Cancelar</a>
</div>
