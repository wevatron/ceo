<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $estado->descripcion }}</p>
</div>

<!-- Accion Field -->
<div class="form-group">
    {!! Form::label('accion', 'Accion:') !!}
    <p>{{ $estado->accion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $estado->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $estado->updated_at }}</p>
</div>

