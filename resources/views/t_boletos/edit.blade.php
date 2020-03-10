@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            T Boleto
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tBoleto, ['route' => ['tBoletos.update', $tBoleto->id], 'method' => 'patch']) !!}

                        @include('t_boletos.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection