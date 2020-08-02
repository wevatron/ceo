<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- Accion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accion', 'Accion:') !!}
    {!! Form::text('accion', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cCategorias.index') }}" class="btn btn-default">Cancel</a>
</div>
