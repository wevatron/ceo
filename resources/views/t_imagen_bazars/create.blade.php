@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            T Imagen Bazar
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'tImagenBazars.store','enctype'=>'multipart/form-data']) !!}

                        @include('t_imagen_bazars.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
