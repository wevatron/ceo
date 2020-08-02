<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $cCategoria->descripcion }}</p>
</div>

<!-- Accion Field -->
<div class="form-group">
    {!! Form::label('accion', 'Accion:') !!}
    <p>{{ $cCategoria->accion }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $cCategoria->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $cCategoria->updated_at }}</p>
</div>

