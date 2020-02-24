<!-- Nombre Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nombre_evento', 'Nombre Evento:') !!}
    {!! Form::text('nombre_evento', null, ['class' => 'form-control']) !!}
</div>
<!-- Nombre Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion_evento', 'Descripcion Evento:') !!}
    {!! Form::text('descripcion_evento', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Img Field -->
<div class="form-group col-sm-12 col-lg-12" >
    {!! Form::label('url_img', 'Url Img:') !!}
    {!! Form::file('url_img', null, ['class' => 'form-control']) !!}
</div>

@if(Request::is('tEventos/update'))
<div class="col-sm-12 col-lg-12">
     <img width="70px" src="http://ceo.grakaja.com/{{$tEvento->url_img}}" alt=""> 
</div>
@endif

<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('Cupo', 'Cupo:') !!}
    {!! Form::text('cupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_evento_id', 'Tipo Evento Id:') !!}
    {!! Form::select('tipo_evento_id', $tipo_eventos, null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tEventos.index') }}" class="btn btn-default">Cancelar</a>
</div>
