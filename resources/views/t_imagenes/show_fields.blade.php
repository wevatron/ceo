<!-- Descripcion Field -->
<div class="form-group">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    <p>{{ $tImagenes->descripcion }}</p>
</div>

<!-- T Evento Id Field -->
<div class="form-group">
    {!! Form::label('t_evento_id', 'T Evento Id:') !!}
    <p>{{ $tImagenes->t_evento_id }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tImagenes->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tImagenes->updated_at }}</p>
</div>

