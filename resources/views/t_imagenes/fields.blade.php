<!-- Descripcion Field -->
<div class="form-group col-sm-6">
    {!! Form::label('descripcion', 'Descripcion:') !!}
    {!! Form::text('descripcion', null, ['class' => 'form-control']) !!}
</div>

<!-- T Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('t_evento_id', 'T Evento Id:') !!}
    {!! Form::select('t_evento_id', $eventos, null, ['class' => 'form-control']) !!}
</div>

<!-- T Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relacion', 'Tipo de banner:') !!}
    {!! Form::select('relacion', [
        '1'=>'Banner 1920 x 1080',
        '2'=>'Banner 1100 x 1600'
        ] , null, ['class' => 'form-control']) !!}
</div>

<!-- Url Img Field -->
<div class="form-group col-sm-12 col-lg-12" >
    {!! Form::label('url_img', 'Url Img:') !!}
    {!! Form::file('url_img', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tImagenes.index') }}" class="btn btn-default">Cancel</a>
</div>
