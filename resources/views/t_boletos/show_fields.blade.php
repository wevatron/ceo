<!-- T Evento Id Field -->
<div class="form-group">
    {!! Form::label('t_evento_id', 'T Evento Id:') !!}
    <p>{{ $tBoleto->t_evento_id }}</p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $tBoleto->usuario_id }}</p>
</div>

<!-- Dislike Field -->
<div class="form-group">
    {!! Form::label('dislike', 'Dislike:') !!}
    <p>{{ $tBoleto->dislike }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tBoleto->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tBoleto->updated_at }}</p>
</div>

