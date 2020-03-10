@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            C Estados Rep
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">
            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'cEstadosReps.store']) !!}

                        @include('c_estados_reps.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
