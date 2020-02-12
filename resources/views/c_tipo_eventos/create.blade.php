@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipo de Eventos
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cTipoEventos.store']) !!}

                        @include('c_tipo_eventos.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
