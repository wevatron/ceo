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
                   {!! Form::model($cEstadosRep, ['route' => ['cEstadosReps.update', $cEstadosRep->id], 'method' => 'patch']) !!}

                        @include('c_estados_reps.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection