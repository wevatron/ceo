@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Bazar / Aprende +
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tBazar, ['route' => ['tBazars.update', $tBazar->id], 'method' => 'patch']) !!}

                        @include('t_bazars.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection