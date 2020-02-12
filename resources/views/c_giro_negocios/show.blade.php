@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Giros de Negocios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('c_giro_negocios.show_fields')
                    <a href="{{ route('cGiroNegocios.index') }}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
