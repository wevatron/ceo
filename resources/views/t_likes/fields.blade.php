<!-- T Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('t_evento_id', 'T Evento Id:') !!}
    {!! Form::text('t_evento_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usuario Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usuario_id', 'Usuario Id:') !!}
    {!! Form::text('usuario_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dislike Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dislike', 'Dislike:') !!}
    {!! Form::text('dislike', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tLikes.index') }}" class="btn btn-default">Cancel</a>
</div>
