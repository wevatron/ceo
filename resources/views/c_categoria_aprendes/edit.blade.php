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
                   {!! Form::model($cCategoriaAprende, ['route' => ['cCategoriaAprendes.update', $cCategoriaAprende->id], 'method' => 'patch']) !!}

                        @include('c_categoria_aprendes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection