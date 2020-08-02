@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Aprende mas
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tAprende, ['route' => ['tAprendes.update', $tAprende->id], 'method' => 'patch']) !!}

                        @include('t_aprendes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection