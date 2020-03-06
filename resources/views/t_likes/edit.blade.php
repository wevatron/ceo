@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            T Like
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($tLike, ['route' => ['tLikes.update', $tLike->id], 'method' => 'patch']) !!}

                        @include('t_likes.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection