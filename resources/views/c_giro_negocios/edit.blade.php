@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Giros de Negocios
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cGiroNegocio, ['route' => ['cGiroNegocios.update', $cGiroNegocio->id], 'method' => 'patch']) !!}

                        @include('c_giro_negocios.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection