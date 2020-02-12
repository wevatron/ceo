<!-- Nombre Evento Field -->
<div class="form-group">
    {!! Form::label('nombre_evento', 'Nombre Evento:') !!}
    <p>{{ $tEvento->nombre_evento }}</p>
</div>

<!-- Cupo Field -->
<div class="form-group">
    {!! Form::label('cupo', 'Cupo:') !!}
    <p>{{ $tEvento->cupo }}</p>
</div>

<!-- Url Img Field -->
<div class="form-group">
    {!! Form::label('url_img', 'Imagen:') !!}
    <p>{{ $tEvento->url_img }}</p>
</div>

<!-- Tipo Evento Id Field -->
<div class="form-group">
    {!! Form::label('tipo_evento_id', 'Tipo Evento:') !!}
    <p>{{ $tEvento->tipo_evento_id }}</p>
</div>


