@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            T Imagenes
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tImagenes, ['route' => ['tImagenes.update', $tImagenes->id], 'method' => 'patch']) !!}

                        @include('t_imagenes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection