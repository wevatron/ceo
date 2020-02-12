@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Tipos Usuarios
        </h1>
    </section>
    <div class="content">
        <div class="box box-primary">
            <div class="box-body">
                <div class="row" style="padding-left: 20px">
                    @include('c_tipo_usuarios.show_fields')
                    <a href="{{ route('cTipoUsuarios.index') }}" class="btn btn-default">Regresar</a>
                </div>
            </div>
        </div>
    </div>
@endsection
