<table class="table" id="tBazars-table">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Descripcion</th>
            <th>Video</th>
            <th>Facebook</th>
            <th>Instagram</th>
            <th>Youtube</th>
            <th>Twitter</th>
            <th>Web</th>
            <th>Categoria</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>{{ $tBazar->nombre }}</td>
        <td>{{ $tBazar->descripcion }}</td>
        <td>{{ $tBazar->video }}</td>
        <td>{{ $tBazar->facebook }}</td>
        <td>{{ $tBazar->instagram }}</td>
        <td>{{ $tBazar->youtube }}</td>
        <td>{{ $tBazar->twitter }}</td>
        <td>{{ $tBazar->web }}</td>
        <td>{{ $tBazar->Categoria->descripcion }}</td>
           
        </tr>

    </tbody>
</table>

<section class="content-header">
    <h1 class="pull-left">Imagenes</h1>
    <h1 class="pull-right">
       <a class="btn btn-primary pull-right" 
       style="margin-top: -10px;margin-bottom: 5px" 
       href="{{ route('tImagenBazars.create',['id'=>$tBazar->id] ) }}">
        Agregar imagen
    </a>
    </h1>
</section>


<div class="content">
    <div class="clearfix"></div>

    @include('flash::message')

    <div class="clearfix"></div>
    <div class="box box-primary">
        <div class="box-body">
                @include('t_imagen_bazars.table')
        </div>
    </div>
    <div class="text-center">
    
    </div>
</div>