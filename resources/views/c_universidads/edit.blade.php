@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Catalogo de Universidades
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cUniversidad, ['route' => ['cUniversidads.update', $cUniversidad->id], 'method' => 'patch']) !!}

                        @include('c_universidads.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection