<!-- T Evento Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('relacion', 'Tipo de banner:') !!}
    {!! Form::select('relacion', [
        '3'=>'Banner 1000 x 1000'
        ] , null, ['class' => 'form-control']) !!}
</div>
<!-- Url Img Field -->
<div class="form-group col-sm-12 col-lg-12" >
    {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen', null, ['class' => 'form-control']) !!}
</div>
<input type="hidden" value="{{$id}}" name="t_bazar_id" id="">
<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tImagenBazars.index') }}" class="btn btn-default">Cancel</a>
</div>
