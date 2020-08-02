@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            C Categoria Aprende
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cCategoriaAprendes.store']) !!}

                        @include('c_categoria_aprendes.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
