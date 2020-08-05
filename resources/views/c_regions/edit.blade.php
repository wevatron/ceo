@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            C Region
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($cRegion, ['route' => ['cRegions.update', $cRegion->id], 'method' => 'patch']) !!}

                        @include('c_regions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection