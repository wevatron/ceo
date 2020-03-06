<!-- T Evento Id Field -->
<div class="form-group">
    {!! Form::label('t_evento_id', 'T Evento Id:') !!}
    <p>{{ $tLike->t_evento_id }}</p>
</div>

<!-- Usuario Id Field -->
<div class="form-group">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    <p>{{ $tLike->usuario_id }}</p>
</div>

<!-- Dislike Field -->
<div class="form-group">
    {!! Form::label('dislike', 'Dislike:') !!}
    <p>{{ $tLike->dislike }}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{{ $tLike->created_at }}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{{ $tLike->updated_at }}</p>
</div>

